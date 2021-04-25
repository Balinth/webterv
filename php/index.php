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

    <?php createNav("landing")?>

<main>
    <section id="listintro">
            <h1>Belépés</h1>
            <p><strong>Jelentkezz be</strong> a felhasználói adataiddal, vagy ha még nincsenek, <strong>regisztrálj</strong>.</p>
    </section>
    <fieldset id="loginform">
        <legend>Bejelentkezés</legend>
        <form action="login.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
            <label for="loginemail">E-mail</label>
            <input class="textinput" id="loginemail" name="logineml"
            <?php if(isset($_SESSION["logineml"])) { echo 'value='.$_SESSION["logineml"];} ?>
             type="email" maxlength="50" placeholder="Nagybetűkre figyelj" required/> <br />
            <?php if(isset($_SESSION['loginemlError'])) {echo 'Ismeretlen felhasználónév!<br/>';} ?>
            <label for="loginpw">Jelszó</label><input class="textinput" id="loginpw" name="loginpw" type="password" maxlength="25" placeholder="Nagybetűkre figyelj" required/><br />
            <?php if(isset($_SESSION['loginpwError'])) {echo 'Helytelen jelszó!<br/>';} ?>
            <input type="submit" class="ok buttoninput" value="Bejelentkezem"/><br />
        </form>
    </fieldset>
    <fieldset id="regform">
        <legend>Regisztráció</legend>
        <form action="reg.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <label for="regemail">E-mail</label>
            <input class="textinput" id="regemail" name="logineml"
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
            <label for="regname">Felhasználónév</label>
            <input class="textinput" id="regname" name="username"
            <?php if(isset($_SESSION["username"])) { echo 'value='.$_SESSION["username"];} ?>
            type="text" maxlength="25" placeholder="Min. 5 és 25 max. karakter" required/> <br />
            <?php
                if(isset($_SESSION['usernameLengthError'])) {
                    echo 'A hossza 5-25 karakter lehet.<br/>';
                }
            ?>
            <label for="regpw">Jelszó</label><input class="textinput" id="regpw" name="loginpw" type="password" maxlength="25" placeholder="Min. 10 és 25 max. karakter" required/><br />
            <?php
                if(isset($_SESSION['regpwLengthError'])) {
                    echo 'A hossza 10-25 karakter lehet.<br/>';    
                }
            ?>
            <label for="regpw">Jelszó újra</label><input class="textinput" id="regpwagain" name="loginpwagain" type="password" maxlength="25" placeholder="Egyezzen a jelszóval" required/><br />
            <?php
                if(isset($_SESSION['regpwMatchError'])) {
                    echo 'A jelszavaknak egyezniük kell.<br/>';    
                }
            ?>
            <label for="userpic">Kép</label><input class="ok buttoninput" id="userpic" name="userpic" type="file" accept="image/*"/><br />
            <?php
                if(isset($_SESSION['userpicFormatError'])) {
                    echo 'A kép max. 30 Mb méretű és .jpg, .jpeg, .jfif vagy .png formátumú lehet!<br/>';
                } else {
                    if(isset($_SESSION['userpicUploadError'])) {
                        echo 'A kép feltöltése nem sikerült!<br/>';    
                    }
                }
            ?>
            <input type="submit" class="ok buttoninput" value="Regisztrálok"/><br />
            <?php
                if(isset($_SESSION['regMessage'])) {
                    echo 'Sikeres regisztráció. Jelentkezz be!<br/>';
                }
            ?>
        </form>
    </fieldset>
</main>

    <?php commissarPanel()?>

    <?php footerPanel()?>

</body>

</html>