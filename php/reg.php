<?php
    session_start();
    include_once "todo_user.php";
    include_once "todo_userslisting.php";
    $usernametaken = false;
    $regmessage = "";

if(isset($_POST["regform"])){
    if(!isset($_POST["username"]) || !isset($_POST["loginpw"]) || !isset($_POST["logineml"])){
        die("<strong>AJVÉ!</strong> Nem töltöttél ki minden kötelező mezőt. <a href='index.php'>Nekifutok újra</a>");
    }
    if(strlen($_POST["username"])<5 || strlen($_POST["username"])>25){
        die("<strong>AJVÉ!</strong> A felhasználónév legalább 5 és legfeljebb 25 karakter hosszú lehet. <a href='index.php'>Nekifutok újra</a>");
    }
    if(strlen($_POST["loginpw"])<10 || strlen($_POST["loginpw"])>25){
        die("<strong>AJVÉ!</strong> A jelszó legalább 10 és legfeljebb 25 karakter hosszú lehet. <a href='index.php'>Nekifutok újra</a>");
    }
}
?>