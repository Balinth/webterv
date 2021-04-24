<?php
    session_start();
    session_unset();
    include_once "todo_user.php";
    include_once "todo_userslisting.php";
    $usernametaken = false;

    if(isset($_POST["regform"])){
        if(strlen($_POST["logineml"])>50){
            $_SESSION['loginemlLengthError'] = true;
        }
        if(strlen($_POST["username"])<5 || strlen($_POST["username"])>25){
            $_SESSION['usernameLengthError'] = true;
        }
        if(strlen($_POST["loginpw"])<10 || strlen($_POST["loginpw"])>25){
            $_SESSION['regpwLengthError'] = true;
        }
        if($_POST["loginpw"] !== $_POST["loginpwagain"]){
            $_SESSION['regpwMatchError'] = true;
        }
        if(isset($_FILES["userpic"])){
            $extensions = ["jpg", "png"];
            $picExtension = strtolower(pathinfo($_FILES["userpic"]["name"], PATHINFO_EXTENSION));
            if(in_array($picExtension,$extensions)){
                if($_FILES["userpic"]["error"] === 0){
                    if($_FILES["userpic"]["size"] <= 31457280){
                        $cel = "profile/".$_POST["username"].".".$picExtension;
                        if(!move_uploaded_file($_FILES["userpic"]["tmp_name"], $cel)){
                            $_SESSION['userpicUploadError'] = true;
                        }
                    } else {
                        $_SESSION['userpicFormatError'] = true;
                    }
                } else {
                    $_SESSION['userpicUploadError'] = true;
                }
            } else {
                $_SESSION['userpicFormatError'] = true;
            }
        }
        $new = new User($_POST["username"],$_POST["loginpw"],$_POST["logineml"],$_POST["username"].".",$picExtension);
        array_push($_SESSION["registeredUsers"],$new);
        $new -> tofile();
        $_SESSION['regMessage'] = true;
    }
    header("Location: index.php");
?>