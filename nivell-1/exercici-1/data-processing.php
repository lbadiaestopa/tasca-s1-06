<?php
    session_start();
?>

<html>
    <link rel="stylesheet" href="css/styles.css">

    <body>
        <div class="container">

<?php

    $name = $_POST['name'];
    $age = $_POST['age'];
    $password = $_POST['pass'];

    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    $_SESSION['password'] = $password;

    echo "<h1>Dades rebudes</h1>";
    echo "<p>Hola, $name! Tens $age anys i la teva contrasenya és $password.</p>";

?>

        </div>
    </body>
</html>
