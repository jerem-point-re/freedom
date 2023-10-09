<?php
function showStartPage() {
    global $baseUrl;
    $title = 'Start';
    $css = 'css/style_start.css';
    $js = false;

    ob_start();
?>
    <main>
        <h2>Freedom</h2>
        
        <div class="separator"></div>
        
        <section class="Posts">
            <?= showPostSprite(); ?>
        </section>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>