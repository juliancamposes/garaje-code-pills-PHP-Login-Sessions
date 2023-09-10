<?php
    ob_start();
    session_start();

    if(!isset($_SESSION['valid'])){
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ressources/css/styles.css"/>
    <title>Login con PHP y Sessions</title>
</head>
<body>
    <header>
        <img src="./ressources/img/garaje-logo.jpg" width="100px" height="100px">
        <div id="menu-user">
            <p>Hola <?php echo $_SESSION['email'];?> !</p>
            <a href="logout.php" id="logout-link">Cerrar sesion</a>
        </div>
    </header>
