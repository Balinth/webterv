
    <head>
        <?php
        include_once 'todo_user.php';
        include_once 'todo_item.php';
        include_once 'todo_userslisting.php';
        session_start();
        if(isset($_SESSION["user"]) == false){
            $_SESSION["user"] = null;
        }
        
        include_once "todo_nav.php";
        ?>
        <meta charset="UTF-8" />
        <meta name="author" content="HB&CsD" />
        <meta name="description" content="Hogy el ne ússz a dolgaiddal!" />
        <meta name="keywords" content="teendő, teendo, feladat, to-do, todo, to do" />
        <title>TODO</title>
        <link rel="icon" href="../img/icon.png" />
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
        <link rel="stylesheet" type="text/css" media="print" href="../css/print.css"> 
    </head>