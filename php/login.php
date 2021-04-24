<?php
    session_start();
    session_unset();
    include_once "todo_user.php";

    if(isset($_POST["logineml"]) && isset($_POST["loginpw"])){

        if($_POST["logineml"] == 'admin@admin.admin'){
            if ($_POST['loginpw'] == 'admin'){
                $_SESSION["user"] = new User("admin","admin","admin@admin.admin","fos.png");
                header("Location: todo_list.php");
                return;
            }
            else {
                $_SESSION['loginpwError'] = true;
            }

        }
        else {
            $_SESSION['loginemlError'] = true;
        }
    }
    header("Location: index.php");
?>