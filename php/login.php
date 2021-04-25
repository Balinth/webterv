<?php
    session_start();
    session_unset();
    include_once "todo_item.php";
    include_once "todo_user.php";
    include_once "todo_userslisting.php";

    if(isset($_POST["logineml"]) && isset($_POST["loginpw"])){
        
        if(
            isset($_POST["logineml"])
            && isset($_SESSION['registeredUsers'])
            && isset($_SESSION['registeredUsers'][$_POST["logineml"]])){
            $user = $_SESSION['registeredUsers'][$_POST["logineml"]];
            if ($_POST['loginpw'] == $user->getLoginpw()){
                $_SESSION["user"] = $_POST["logineml"];
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