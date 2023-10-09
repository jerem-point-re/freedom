<?php
function showJoin()
{
    global $baseUrl;

    if ($_POST && $_POST['username'] && $_POST['password']) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = joinning($username, $password);

        if ($result)
            header("Location: $baseUrl");
        else {
            echo "Une erreur est survenue lors de la connexion";
        }
    }
    showJoinPage();
}