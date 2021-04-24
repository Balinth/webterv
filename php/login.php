<?php
    session_start();
    include_once "todo_user.php";

    if(isset($_POST["logineml"]) && isset($_POST["loginpw"])){
        $_SESSION["user"] = new User("fos","fos","fos@fos","fos.png");
        header("Location: todo_list.php");
    }

?>