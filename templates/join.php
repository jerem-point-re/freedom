<?php
function showJoinPage() {

    global $baseUrl;
    $title = 'Join us';

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
            Already have an account?
            <a href="<?= $baseUrl ?>?p=join">Log in</a>
        </p>
    </div>

    <?php
    $content = ob_get_clean();
    require 'layout.php';
}
?>