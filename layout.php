<?php

global $baseUrl;
global $logged;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>

    <title> Freedom |
        <?= $title ?>
    </title>
</head>

<body>
    <div class="header">
        <div class="nav">
            <ul>
                <li class="logo">
                    <a href="<?= $baseUrl ?>"><img src="assets/img/logo.png" alt=""></a>
                </li>
                <li>
                    <a href="<?= $baseUrl ?>">
                        <ion-icon name="home" size="large"></ion-icon>
                    </a>
                </li>
                <?php if (!$logged) { ?>
                <li>
                    <a href="<?= $baseUrl ?>?p=log">
                        <ion-icon name="log-in" size="large"></ion-icon>
                    </a>
                </li>
                    <li>
                        <a href="<?= $baseUrl ?>?p=join">
                            <ion-icon name="person-add" size="large"></ion-icon>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($logged) { ?>
                    <li>
                        <a href="<?= $baseUrl ?>?p=out">
                            <ion-icon name="log-out" size="large"></ion-icon>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="main">
        <?= $content ?>
    </div>
</body>

</html>