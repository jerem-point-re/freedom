<?php global $baseUrl; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/<?= $css ?>">

        <?php
            if($js) {
                echo "<script src='assets/<?= $js ?>' defer></script>";
            }
        ?>

        <title>Freedom | <?= $title ?></title>
    </head>

    <body>
        <header>
            <nav>
                <h1>Freedom | <?= $title ?></h1>

                <ul>
                    <li><a href="<?= $baseUrl ?>" <?php if ($title == 'Home') echo 'class="active-page"' ?>>Home</a></li>
                    <?php
                        if ($_SESSION) {
                            echo "<li><a href=\"$baseUrl?p=profile\>Profile</a></li>";
                            echo "<li><a href=\"$baseUrl?p=friend\>Friend</a></li>";
                            
                        } else echo "<li><a href=\"$baseUrl?p=log\">Login</a></li>";
                    ?>
                    
                </ul>
            </nav>
        </header>

        <?= $content ?>
    </body>
</html>