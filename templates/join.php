<?php
function showJoinPage() {
    $title = 'Login';

    $class = 'login';
    if (isset($_GET['page']) && $_GET['page'] == 'register') $class = 'register';

    ob_start();
?>
    <main id="main" class="<?= $class ?>-active">
        <section class="login">
            <h2>Login</h2>

            <form method="POST">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="inputUsername">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="inputPassword">
                </div>

                <input type="hidden" name="formType" value="login-post">

                <input type="submit" value="Connection">
            </form>

            <button id="btnRegister">Register</button>
        </section>

        <section class="register">
            <h2>Register</h2>

            <form method="POST">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="inputUsername" required>
                </div>

                <div>
                    <label for="mail">Mail</label>
                    <input type="email" name="mail" id="inputMail" required>
                </div>

                <div>
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" id="inputBirthday">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="inputPassword" required>
                </div>

                <input type="hidden" name="formType" value="register-post">

                <input type="submit" value="Registration">
            </form>

            <button id="btnLogin">Login</button>
        </section>
    </main>
<?php
    $content = ob_get_clean();
    require 'layout.php';
}
?>