<?php
    include_once "todo_user.php";
    include_once "todo_userslisting.php";

    function headerPanel(){

        $username = "Jelentkezz be!";
        $userpic = "../img/userimage.jfif";
        if(isset($_SESSION['user'])){
            $username = $_SESSION['registeredUsers'][$_SESSION['user']]->getUserName();
            $userpic = '../profile/' . $_SESSION['registeredUsers'][$_SESSION['user']]->getUserpic();
        }

        echo '
                <div>
                    <div class="username">'
                    .
                    $username
                    .'
                        
                    </div>
                    <div class="datelocation">
                        <p>' . date("Y/m/d") . '</p>
                        <p>Budapest</p>
                        
                    </div>
                </div>
                <div>
                    <img id="usericon" src="' . $userpic .'" alt=""/>
                </div>
                ';

    }

?>
