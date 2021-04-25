<?php
    include_once "todo_user.php";
    include_once "todo_userlistings.php";

    function headerPanel(){
        echo '
            <header>
                <div id=\"brand\">
                    <h2>TODO</h2>
                    <h3>TADAM! És kész is!</h3>
                </div>
                <img id="usericon" src="../img/index.png" width="100" height="100" alt=""/>
                <div id="flexbox">
                    <div>
            ';
        if(isset($_SESSION["user"])){
            echo '
                        <div class="username">
                            <p>Szia '.$_SESSION["registeredUsers"][$_SESSION["user"]]->getUsername().'!</p>
                        </div>
                        <img id="usericon" src="../profile/'.$_SESSION["registeredUsers"][$_SESSION["user"]]->getLogineml().'" width="100" height="100" alt=""/>                    
            ';
        } else {
            echo '
                        <div class="username">
                            <p>Szia! Jelentkezz be!</p>
                        </div>
            ';
        }
        echo '
                        <div class="datelocation">
                            <p>2021.03.28.12:00:00</p>
                            <p>Budapest</p>
                        </div>
                    <div>
                </div>
            </header>
        ';
    }
?>
