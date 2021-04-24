<!DOCTYPE html>
<html lang="en">

<?php include_once "todo_head.php"?>

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
            <label for="userpic">Kép</label><input class="ok buttoninput" id="userpic" name="userpic" type="file"/><br />
            <img id="userpicprev" src="../img/userimage.jfif" alt="Nincs kép"/>
            <input class="ok buttoninput" type="submit" value="Módosítás"/><br />
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