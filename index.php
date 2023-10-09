<?php

require_once('autoload.php');

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'log':
            showAuth();
            break;
        case 'join':
            showAuth();
            break;
        case 'start':
            showStart();
            break;
        case 'profile':
            showProfile();
            break;
        case 'friend':
            showFriend();
            break;
        default:
            showStart();
            break;
    }
} else showStart();

?>