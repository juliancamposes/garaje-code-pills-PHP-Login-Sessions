<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ressources/css/styles.css"/>
    <title>Login con PHP y Sessions</title>
</head>
<body>
    <main>
        <img src="./ressources/img/garaje-logo.jpg" width="200px" height="200px">
        <hr>
        <form action="login.php" method="POST" id="login-form">
            <div class="input-form">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Escribe tu email"/>
            </div>
            <div class="input-form">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Introduce tu contraseña"/>
            </div>

            <button type="submit" form="login-form" value="Submit">Ingresar</button>
            <p>
                ¿No tienes usuario? Entonces puedes crear una cuenta <a href="register.php" class="white">aquí</a>
            </p>
        </form>
    </main>
    
</body>
</html>