<?php
function showProfilePage() {
    global $baseUrl;
    $title = 'Profile';

    ob_start();
?>
    <main>
        <h2>Profile</h2>

        <p class="username">Username</p>

        <p class="mail">mail.random@gmail.com</p>

        <p class="birthday">25 / 11 / 2002</p>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>