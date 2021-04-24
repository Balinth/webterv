<!DOCTYPE html>
<html lang="en">

<?php
include_once "todo_head.php";
?>

<body>
    <header>
        <div id="brand">
            <h2>TODO</h2>
            <h3>TADAM! És kész is!</h3>
            
        <div id="flexbox">
            <section id="listintro">
                <h1>Belépés</h1>
                <p><strong>Jelentkezz be</strong> a felhasználói adataiddal, vagy ha még nincsenek, <strong>regisztrálj</strong>.</p>
            </section>
            <img id="usericon" src="../img/index.png" width="100" height="100" alt=""/>
        </div>
        </div>
    </header>

    <?php createNav("landing")?>

<main>
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
        <form action="reg.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
            <label for="regemail">E-mail</label>
            <input class="textinput" id="regemail" name="logineml"
            <?php if(isset($_SESSION["logineml"])) { echo 'value='.$_SESSION["logineml"];} ?>
            type="email" maxlength="50" placeholder="Max. 50 karakter" required/> <br />
            <?php
                if(isset($_SESSION['loginemlLengthError'])) {
                    echo 'Legfeljebb 50 karakter hosszú lehet!<br/>';
                }
            ?>
            <label for="regname">Felhasználónév</label><input class="textinput" id="regname" name="username" type="text" maxlength="25" placeholder="Min. 5 és 25 max. karakter" required/> <br />
            <?php
                if(isset($_SESSION['usernameLengthError'])) {
                    echo 'Legalább 5 és legfeljebb 25 karakter hosszú lehet!<br/>';
                }
            ?>
            <label for="regpw">Jelszó</label><input class="textinput" id="regpw" name="loginpw" type="password" maxlength="25" placeholder="Min. 10 és 25 max. karakter" required/><br />
            <?php
                if(isset($_SESSION['regpwLengthError'])) {
                    echo 'Legalább 10 és legfeljebb 25 karakter hosszú lehet!<br/>';    
                }
            ?>
            <label for="regpw">Jelszó újra</label><input class="textinput" id="regpwagain" name="loginpwagain" type="password" maxlength="25" placeholder="Egyezzen a jelszóval" required/><br />
            <?php
                if(isset($_SESSION['regpwMatchError'])) {
                    echo 'A két jelszó nem egyezik!<br/>';    
                }
            ?>
            <label for="userpic">Kép</label><input class="ok buttoninput" id="userpic" name="userpic" type="file" accept="image/*"/><br />
            <?php
                if(isset($_SESSION['userpicFormatError'])) {
                    echo 'A kép max. 30 Mb méretű és .jpg vagy .png formátumú lehet!<br/>';
                } else {
                    if(isset($_SESSION['userpicUploadError'])) {
                        echo 'A kép feltöktése nem sikerült!<br/>';    
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

<article id="motivation">
    <h2>Napi lelkesítő</h2>
    <ul>
        <li class="quote"><q>Annyira tettre kész vagyok, hogy a nevem valójában ige kellene, hogy legyen.</q><br /><span class="commissar">- graffiti</span></li>
        <li class="quote"><q>A tett halála az okoskodás.</q><br /><span class="commissar">- Lucifer, Az ember tragédiája</span></li>
        <li class="quote"><q>A racionalitás a tettekben lakozik, nem a gondolatokban vagy abban, amit 'hisz' az ember.</q><br /><span class="commissar">- Nassim Nicholas Taleb</span></li>
    </ul>
</article>

<footer>
    <div id="contact">
        <p class="tag">Készítette:</p> <p class="value">Harmat Bálint &amp; Csobay Dávid</p>
        <p class="tag">Kapcsolat:</p> <a class="value" href="https://www.coosp.etr.u-szeged.hu/" target="_blank">@ SZTE Coospace</a>
        <p class="tag">Copy?</p> <p class="value">Right!</p>
    </div>

    <div id="version">
        <p class="tag">Verzió:</p> <p class="value">1.0</p>
        <p class="tag">Frissítve:</p> <p class="value">2021. 03. 28.</p>
        <p class="tag">Tesztelt böngészők:</p> <p class="value">Chrome, Edge</p>
    </div>
</footer>

</body>

</html>