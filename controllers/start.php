<?php

$status = getStatuses();
function showStart () {
    // showStatus();
    showStartPage();
}

function showCreateAStatus() {
    global $baseUrl;
    global $logged;

    if($logged) {
        if($_POST && $_POST['content']) {
            $status = createStatus($_SESSION['user']['id'], $_POST['content']);

            if($status) {} else echo "Uh-oh!";
        }
    }
}