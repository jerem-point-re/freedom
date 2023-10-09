<?php

function login ($username, $password) {
    global $PDO;

    try {
        $query = $PDO->prepare("SELECT * FROM users WHERE username = :username");
        $query->execute(['username' => $username]);
    
        $user = $query->fetch();
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            return true;

        } else return false;

    } catch (PDOException $e) { return false; }
}

?>