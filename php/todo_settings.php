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
        <form action="changeuser.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <label for="useremail">E-mail</label>
            <input class="textinput" id="useremail" name="logineml"
            <?php if(isset($_SESSION["user"])) { echo 'value='.$_SESSION["registeredUsers"][$_SESSION["user"]]->getLogineml();} ?>
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
            <?php if(isset($_SESSION["user"])) { echo 'value='.$_SESSION["registeredUsers"][$_SESSION["user"]]->getUsername();} ?>
            type="text" maxlength="25" placeholder="Min. 5 és 25 max. karakter" required/> <br />
            <?php
                if(isset($_SESSION['usernameLengthError'])) {
                    echo 'A hossza 5-25 karakter lehet.<br/>';
                }
            ?>
            <label for="userpw">Jelszó</label>
            <input class="textinput" id="userpw" name="loginpw"
            <?php if(isset($_SESSION["user"])) { echo 'value='.$_SESSION["registeredUsers"][$_SESSION["user"]]->getLoginpw();} ?>
            type="password" maxlength="25" placeholder="Min. 10 és 25 max. karakter" required/><br />
            <?php
                if(isset($_SESSION['regpwLengthError'])) {
                    echo 'A hossza 10-25 karakter lehet.<br/>';    
                }
            ?>
            <label for="userpic">Kép</label><input class="ok buttoninput" id="userpic" name="userpic" type="file" accept="image/*"/><br />
            <img id="userpicprev"
            <?php if(isset($_SESSION["user"])) { echo 'src="../profile/' .$_SESSION["registeredUsers"][$_SESSION["user"]]->getUserpic() .'"';}?>
            alt="Nincs kép"/>
            <?php
                if(isset($_SESSION['userpicFormatError'])) {
                    echo 'A kép max. 30 Mb méretű és .jpg, .jpeg, .jfif vagy .png formátumú lehet!<br/>';
                } else {
                    if(isset($_SESSION['userpicUploadError'])) {
                        echo 'A kép feltöltése nem sikerült!<br/>';    
                    }
                }
            ?>
            <input class="ok buttoninput" type="submit" value="Módosítás"/><br />
            <?php
                if(isset($_SESSION['reqFieldError'])) {
                    echo 'Minden kötelező mezőt ki kell tölteni!<br/>';
                }
                if(isset($_SESSION['regMessage'])) {
                    echo 'Adataidat sikeresen módosítottad. Jelentkezz be újra!<br/>';
                }
            ?>
        </form>
    </fieldset>
</main>

<?php commissarPanel()?>

<?php footerPanel()?>

</body>

</html>