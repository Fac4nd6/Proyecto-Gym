<?php
session_start();

require 'conexion.php';


if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $resultado = mysqli_query($conexion, $sql);
    $usuario = mysqli_fetch_assoc($resultado);


    if ($usuario) {
        $_SESSION['username'] = $usuario['username'];
        header('Location: inicio.php');
        exit;   
    } else {
        $error = "Usuario no encontrado";
    }
}


require "header.php";
?>

<main>
    <section class="login-hero">
        <!-- Background image: url("Img/Opti/hero-principal.webp") -->

        <!-- Login Modal Centrado -->
        <div class="login-modal">
            <h1 class="login-title">Login Now</h1>

            <form class="login-form" action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="PopeyeTheSailorMan@youremail.com"
                        required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="password-wrapper">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="@mySecurePassword123"
                            required>
                    </div>
                </div>

                <button type="submit" class="btn-join">JOIN NOW</button>
            </form>
        </div>
    </section>
</main>

<?php
require "footer.php";
?>

</body>

</html>