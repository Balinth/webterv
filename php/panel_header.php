<?php
    include_once "todo_user.php";
    include_once "todo_userslisting.php";

    function headerPanel(){

        $username = "Jelentkezz be!";

        if(isset($_SESSION['user'])){
            $username = $_SESSION['registeredUsers'][$_SESSION['user']]->getUserName();
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
                    <img id="usericon" src="../img/userimage.jfif" alt=""/>
                </div>
                ';

    }

?>
