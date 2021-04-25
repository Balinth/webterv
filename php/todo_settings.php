<!DOCTYPE html>
<html lang="en">

<?php
include_once "todo_head.php";
include_once "panel_header.php";
include_once "panel_footer.php";
include_once "panel_commissar.php";
?>


<body>
    <header>
        <div id="brand">
            <h2>TODO</h2>
            <h3>TADAM! És kész is!</h3>
            
        <div id="flexbox">
            <section id="listintro">
                <h1>Beállítások</h1>
                <p>Itt <strong>módosíthatod</strong> a felhasználói adataidat.</p>
            </section>
            <div>
                <div class="username">
                    Todo Elek
                </div>
                <div class="datelocation">
                    <p>2021.03.28.12:00:00</p>
                    <p>Budapest</p>
                    
                </div>
            </div>
            <div>
                <img id="usericon" src="../img/userimage.jfif" alt=""/>
            </div>
        </div>
        </div>
    </header>

    <?php createNav("settings")?>

<main>
    <fieldset id="userdataform">
        <legend>Felhasználói adatok</legend>
        <form action="todo_settings.html" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
            <label for="useremail">E-mail</label><input class="textinput" id="useremail" name="logineml" type="email" maxlength="50" value="elek.todo@gmail.com" required/> <br />
            <label for="username">Felhasználónév</label><input class="textinput" id="username" name="username" type="text" maxlength="25" value="Elek" required/> <br />
            <label for="userpw">Jelszó</label><input class="textinput" id="userpw" name="loginpw" type="password" maxlength="25" value="t1tk0s.j3lsz0" required/><br />
            <label for="userpic">Kép</label><input class="ok buttoninput" id="userpic" name="userpic" type="file" accept="image/*"/><br />
            <img id="userpicprev" src="../img/userimage.jfif" alt="Nincs kép"/>
            <input class="ok buttoninput" type="submit" value="Módosítás"/><br />
        </form>
    </fieldset>
</main>

<?php commissarPanel()?>

<?php footerPanel()?>

</body>

</html>