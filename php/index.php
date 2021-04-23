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
                <h1>Belépés</h1>
                <p><strong>Jelentkezz be</strong> a felhasználói adataiddal, vagy ha még nincsenek, <strong>regisztrálj</strong>.</p>
            </section>
            <img id="usericon" src="../img/index.png" width="100" height="100" alt=""/>
        </div>
        </div>
    </header>

    <?php createNav(null, null)?>

<main>
    <fieldset id="loginform">
        <legend>Bejelentkezés</legend>
        <form action="todo_list.html" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
            <label for="loginemail">E-mail</label><input class="textinput" id="loginemail" name="logineml" type="email" maxlength="50" placeholder="Nagybetűkre figyelj" required/> <br />
            <label for="loginpw">Jelszó</label><input class="textinput" id="loginpw" name="loginpw" type="password" maxlength="25" placeholder="Nagybetűkre figyelj" required/><br />
            <input type="submit" class="ok buttoninput" value="Bejelentkezem"/><br />
        </form>
    </fieldset>
    <fieldset id="regform">
        <legend>Regisztráció</legend>
        <form action="todo_landing.html" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
            <label for="regemail">E-mail</label><input class="textinput" id="regemail" name="logineml" type="email" maxlength="50" placeholder="Max. 50 karakter" required/> <br />
            <label for="regname">Felhasználónév</label><input class="textinput" id="regname" name="username" type="text" maxlength="25" placeholder="Max. 25 karakter" required/> <br />
            <label for="regpw">Jelszó</label><input class="textinput" id="regpw" name="loginpw" type="password" maxlength="25" placeholder="Max. 25 karakter" required/><br />
            <input type="submit" class="ok buttoninput" value="Regisztrálok"/><br />
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