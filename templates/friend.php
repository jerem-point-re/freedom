<?php
function showFriendPage() {
    global $baseUrl;
    $title = 'Friend';

    ob_start();
?>
    <main>
        <h2>Friend</h2>

        <?= showFriendSprite(); ?>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>