<?php
include_once "todo_user.php";
session_start();
$file = fopen("users.txt", "a+");
$_SESSION["registeredUsers"] = [];
while (($line = fgets($file)) !== false){
    $item = unserialize($line);
    $newUser = new User($item["username"],$item["loginpw"],$item["logineml"],$item["userpic"]);
    array_push($_SESSION["registeredUsers"], $newUser);
}
fclose($file);
?>
