<?php
    require_once('./includes/Login.class.php');
    if(isset($_POST['email']) && isset($_POST['password'])){
        $login = new Login($_POST['email'], $_POST['password']);
    } else {
        header('Location: index.php');
    }

?>