<?php
    require_once('functions.php');

    class Login{
        private $email;
        private $password;
        private $connectionDB;

        public function __construct($email, $password)
        {
            $this->email = secure_data($email);
            $this->password = secure_data($password);
            $this->connectionDB = connectionDB();

            if($this->check_email_exists()){
                 $passInDB = $this->get_pass_in_db();
                 $auth = password_verify($this->password,$passInDB);
                 if($auth){
                    ob_start();
                    session_start();
                    $_SESSION['email'] = $this->email;
                    $_SESSION['valid'] = true;
                    header('Location: home.php');
                 } else {
                    header('Location: index.php');
                 }
            } else {
                header('Location: index.php');
            }


        }

        private function check_email_exists(){
			$stmt = $this->connectionDB->prepare('SELECT * FROM listado_usuarios WHERE email=:email');
			$stmt->bindParam(':email',$this->email);
			$stmt->execute();
			
			$result = $stmt->fetch();
	
			if(isset($result['email'])){
	            return true;
	        } else {
	            return false;
	        }
		}

        private function get_pass_in_db(){
            $stmt = $this->connectionDB->prepare('SELECT * FROM listado_usuarios WHERE email=:email');
            $stmt->bindParam(':email',$this->email);
            $stmt->execute();

            $result = $stmt->fetch();

            return $result['password'];
        }
    }

?>