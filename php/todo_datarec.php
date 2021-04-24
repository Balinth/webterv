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
                <h1>Teendő részletei</h1>
                <p>Itt vehetsz fel új teendőket.</p>
                <p>Add meg az adatokat. Ha minden okés, <strong>Rögzít</strong>. Ha nagyon elrontottad, kezdd <strong>Újra</strong>. Ha mégsem vennél fel új teendőt, <strong>Mégse</strong>, és örülj, hogy ennyivel is kevesebb a teendőd.</p>
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

    <?php createNav("datarec")?>

<main>
    <fieldset id="todoform">
        <legend>Teendő adatai</legend>
        <form action="todo_list.html" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
            <label class="inputlabel" for="todotitle">Teendő</label><input class="textinput" id="todotitle" name="todotitle" type="text" size="100" maxlength="100" placeholder="Teendő címe" required /> <br />
            <label class="inputlabel" for="todotags">Címkék</label><input class="textinput" id="todotags" name="todotags" type="text" size="100" maxlength="100" placeholder="Címkék" /><br />
            <label class="inputlabel" for="tododescription">Leírás</label><textarea class="textinput" id="tododescription" name="tododescription" cols="100" rows="10" maxlength="1000" placeholder="Teendő leírása (max. 1000 karakter)"></textarea><br />
            <label class="inputlabel" for="tododuedate">Határidő</label><input class="dateinput" id="tododuedate" name="tododuedate" type="date" required /><br />
            <label class="inputlabel" for="todostatus">Állapot</label><select class="textinput" id="todostatus" name="todostatus" required>
                <option value="inprogress" selected>Folyamatban</option>
                <option value="done">Kész</option>
                <option value="later">Később</option>
                <option value="postponed">Elnapolva</option>
            </select> <br />
            <input class="buttoninput ok" id="submit" name="submit" type="submit" value="Rögzít" />
            <input class="buttoninput cancel" id="reset" name="reset" type="reset" value="Újra" />
            <input class="buttoninput cancel" id="cancel" name="cancel" type="button" value="Mégse" onclick="window.location.href='todo_list.html'"/>
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