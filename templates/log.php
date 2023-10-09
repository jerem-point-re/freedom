<?php

function showLoginPage()
{

    global $baseUrl;
    $title = 'Log In';

    ob_start();
    ?>

    <div class="main">

        <h2>
            <?= $title ?>
        </h2>

        <form method="POST">
            <label for="username">Username</label>
            <input type="text" name="username">

            <label for="password">Password</label>
            <input type="password" name="password">

            <input type="submit" value="Log in">
        </form>

        <p>
            Do not have an account?
            <a href="<?= $baseUrl ?>?p=join">Join us</a>
        </p>
    </div>

    <?php
    $content = ob_get_clean();
    require 'layout.php';
}
?>