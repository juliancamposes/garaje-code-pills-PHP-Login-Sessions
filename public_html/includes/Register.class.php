<?php

	require_once('functions.php');

	class Register{
		
		private $email;
		private $password;	
		private $connectionDB;
		private $result_register;
	
		public function __construct($email, $password){
			$this->email = secure_data($email);
			$this->password = secure_data($password);
			$this->password = hash_password($this->password);
			$this->connectionDB = connectionDB();

			try{
				if($this->check_email_exists()){
						$this->result_register = false;
				} else {
						$this->create_user();
						$this->result_register = true;
				}
			} catch(Exception $e){
				die('ERROR: '. $e->getMessage());
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
	
		private function create_user(){
			$stmt = $this->connectionDB->prepare('INSERT INTO listado_usuarios (email, password) VALUES (:email,:password)');
			$stmt->bindParam(':email',$this->email);
			$stmt->bindParam(':password',$this->password);
			$stmt->execute();
		}

		public function get_confirmation(){
			if($this->result_register){
				return 'Usuario creado con éxito';
			} else {
				return 'El email ya existe en el sistema';
			}
		}
		
	}

?>