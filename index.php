<?php

require_once('autoload.php');

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'log':
            showLog();
            break;
        case 'join':
            showJoin();
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
        case 'status':
            showCreateStatus();
            break;
        case 'out':
            session_destroy();
            header("Location: $baseUrl");
            break;
        default:
            showStart();
            break;
    }
} else
    showStart();

?>