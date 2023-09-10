<?php
    require_once('./includes/header.php');
?>
    <main>
        <img src="./ressources/img/garaje-logo.jpg" width="200px" height="200px">
        <hr>
        <h2 class="white">Tu información de perfil</h2>
        <hr>
        <section class="white">
            <p>Tu email es <?php echo $_SESSION['email'];?> </p>
            <p>Esta información la hemos recuperado usando las sesiones</p>
        </section>
    </main>
</body>
</html>