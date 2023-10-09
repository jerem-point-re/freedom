<?php

function joinning($username, $password)
{
    global $PDO;

    try {
        $query = $PDO->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $query->execute([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        return true;

    } catch (PDOException $e) {
        return false;
    }
}

?>