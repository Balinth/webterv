<?php
    session_start();
    session_unset();
    include_once "todo_user.php";
    include_once "todo_userslisting.php";
    $processUser = true;

    if(isset($_POST["logineml"])){
        $_SESSION["logineml"] = $_POST["logineml"];
        if(strlen($_POST["logineml"])>50){
            $_SESSION['loginemlLengthError'] = true;
            $processUser = false;
        }
    } else {
        $_SESSION['reqFieldError'] = true;
        $processUser = false;
    }
    if(isset($_POST["username"])){
        $_SESSION["username"] = $_POST["username"];
        if(strlen($_POST["username"])<5 || strlen($_POST["username"])>25){
            $_SESSION['usernameLengthError'] = true;
            $processUser = false;
        }
    } else {
        $_SESSION['reqFieldError'] = true;
        $processUser = false;
    }
    if(isset($_POST["loginpw"])){
        $_SESSION["loginpw"] = $_POST["loginpw"];
        if(strlen($_POST["loginpw"])<10 || strlen($_POST["loginpw"])>25){
            $_SESSION['regpwLengthError'] = true;
            $processUser = false;
        }
    } else {
        $_SESSION['reqFieldError'] = true;
        $processUser = false;
    }
    if(isset($_POST["loginpwagain"])){
        $_SESSION["loginpwagain"] = $_POST["loginpwagain"];
        if($_POST["loginpw"] !== $_POST["loginpwagain"]){
            $_SESSION['regpwMatchError'] = true;
            $processUser = false;
        }
    } else {
        $_SESSION['reqFieldError'] = true;
        $processUser = false;
    }
    for($i = 0; $i < count($_SESSION["registeredUsers"]);$i++){
        if($_SESSION["registeredUsers"][$i]->getUsername() == $_POST["username"]){
            $_SESSION['usernameTaken'] = true;
            $processUser = false;
        }
    }
    if(isset($_FILES["userpic"])){
        $extensions = ["jpg", "jpeg", "jfif", "png"];
        $filename = $_FILES["userpic"]["name"];
        $picExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if(in_array($picExtension,$extensions)){
            if($_FILES["userpic"]["error"] === 0){
                if($_FILES["userpic"]["size"] <= 31457280){
                    $target = "profile/" . $_POST["username"] . "." . $picExtension;
                    if(!move_uploaded_file($_FILES["userpic"]["tmp_name"], $target)){
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

    if($processUser == true){
        $new = new User($_POST["username"],$_POST["loginpw"],$_POST["logineml"],$_POST["username"].".".$picExtension);
        array_push($_SESSION["registeredUsers"],$new);
        $new -> tofile();    
        $_SESSION['regMessage'] = true;
    }
    header("Location: index.php");
?>