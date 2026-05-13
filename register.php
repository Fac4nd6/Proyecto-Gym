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
        } else if (strlen($password) < 8) {

            echo "<script>alert('La contraseña debe tener mínimo 8 caracteres');</script>";
        }

            /* Verificar contraseñas */

         else if ($password !== $confirm_password) {


            echo "<script>alert('Las contraseñas no coinciden');</script>";
        } else {

            /* Verificar email repetido */
            $stmt_email = $conexion->prepare("SELECT * FROM users WHERE email = ?");
            $stmt_email->bind_param("s", $email);
            $stmt_email->execute();

            $resultado_email = $stmt_email->get_result();
            $email_existe = $resultado_email->fetch_assoc();

            /* Verificar username repetido */
            $stmt_user = $conexion->prepare("SELECT * FROM users WHERE username = ?");
            $stmt_user->bind_param("s", $username);
            $stmt_user->execute();

            $resultado_user = $stmt_user->get_result();
            $user_existe = $resultado_user->fetch_assoc();

            if ($email_existe) {

                echo "<script>alert('El email ya está registrado');</script>";
            } else if ($user_existe) {

                echo "<script>alert('El nombre de usuario ya existe');</script>";
            } else {

                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $conexion->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

                $stmt->bind_param("sss", $username, $email, $password_hash);

                $stmt->execute();

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