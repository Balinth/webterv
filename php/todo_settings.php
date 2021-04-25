<!DOCTYPE html>
<html lang="en">

<?php
include_once "todo_head.php";
include_once "panel_header.php";
include_once "panel_footer.php";
include_once "panel_commissar.php";
?>


<body>
    <?php headerPanel()?>
    
    <?php createNav("settings")?>

<main>
    <section id="listintro">
                <h1>Beállítások</h1>
                <p>Itt <strong>módosíthatod</strong> a felhasználói adataidat.</p>
    </section>
    <fieldset id="userdataform">
        <legend>Felhasználói adatok</legend>
        <form action="todo_settings.html" method="post" enctype="multipart/form-data" autocomplete="off">
            <label for="useremail">E-mail</label>
            <input class="textinput" id="useremail" name="logineml"
            <?php if(isset($_SESSION["logineml"])) { echo 'value='.$_SESSION["logineml"];} ?>
            type="email" maxlength="50" placeholder="Max. 50 karakter" required/> <br />
            <?php
                if(isset($_SESSION['loginemlLengthError'])) {
                    echo 'Legfeljebb 50 karakter hosszú lehet!<br/>';
                }
                if(isset($_SESSION['emailAlreadyInUse'])) {
                    echo 'Ezzel az email-el már regisztráltak.<br/>';
                }
            ?>
            <label for="username">Felhasználónév</label>
            <input class="textinput" id="username" name="username"
            <?php if(isset($_SESSION["username"])) { echo 'value='.$_SESSION["username"];} ?>
            type="text" maxlength="25" placeholder="Min. 5 és 25 max. karakter" required/> <br />
            <?php
                if(isset($_SESSION['usernameLengthError'])) {
                    echo 'A hossza 5-25 karakter lehet.<br/>';
                }
            ?>
            <label for="userpw">Jelszó</label>
            <input class="textinput" id="userpw" name="loginpw" type="password" maxlength="25" value="t1tk0s.j3lsz0" required/><br />
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