    <?php
    session_start();
    require "conexion.php";
    if (!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['username']) && !empty($_POST['email'])) {

        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $username = $_POST['username'];
        $email = $_POST['email'];


        /* Verificar email válido */
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo "<script>alert('Ingresa un email válido');</script>";
        }

        if (strlen($password) < 12) {

            echo "<script>alert('La contraseña debe tener mínimo 12 caracteres');</script>";
        }

        /* Verificar contraseñas */ else if ($password !== $confirm_password) {

            echo "<script>alert('Las contraseñas no coinciden');</script>";
        } else {

            /* Verificar email repetido */
            $sql_email = "SELECT * FROM users WHERE email = '$email'";
            $resultado_email = mysqli_query($conexion, $sql_email);
            $email_existe = mysqli_fetch_assoc($resultado_email);

            /* Verificar username repetido */
            $sql_user = "SELECT * FROM users WHERE username = '$username'";
            $resultado_user = mysqli_query($conexion, $sql_user);
            $user_existe = mysqli_fetch_assoc($resultado_user);

            if ($email_existe) {

                echo "<script>alert('El email ya está registrado');</script>";
            } else if ($user_existe) {

                echo "<script>alert('El nombre de usuario ya existe');</script>";
            } else {

                $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";

                mysqli_query($conexion, $sql);

                header('Location: index.php');
                exit();
            }
        }
    }


    require "header.php";
    ?>

    <main>
        <section class="login-hero">
        
            <!-- Register Modal Centrado -->
            <div class="login-modal">
                <h1 class="login-title">Register Now</h1>

                <form class="login-form" action="register.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Your Username"
                            required>
                    </div>

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
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="@mySecurePassword123"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password:</label>
                        <input
                            type="password"
                            id="confirm-password"
                            name="confirm_password"
                            placeholder="Confirm your password"
                            required>
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