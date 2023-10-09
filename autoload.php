<?php
session_start();

global $baseUrl;
$baseUrl = "http://localhost/etiennev/freedom";
global $logged;
$logged = $_SESSION && $_SESSION['user'];

require_once('models/db.php');
require_once('models/auth.php');
require_once('models/join.php');
require_once('models/start.php');

require_once('templates/log.php');
require_once('templates/join.php');
require_once('templates/friend.php');
require_once('templates/profile.php');
require_once('templates/start.php');

require_once('templates/sprites/post.php');
require_once('templates/sprites/friend.php');

require_once('controllers/auth.php');
require_once('controllers/join.php');
require_once('controllers/friend.php');
require_once('controllers/start.php');
require_once('controllers/profile.php');
?>