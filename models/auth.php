<?php

function login ($username, $password) {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $query->execute(['username' => $username]);
    
        $user = $query->fetch();
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            return true;

        } else return false;

    } catch (PDOException $e) { return false; }
}

function register ($username, $password) {
    global $pdo;

    $text = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $arr = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];

    try {
        $query = $pdo->prepare($text);
        $query->execute($arr);
    
        return true;

    } catch (PDOException $e) { return false; }
}

?>