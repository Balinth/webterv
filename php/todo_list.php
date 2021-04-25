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
            <h1>Teendők</h1>
            <p>Az alábbiakban láthatod a teendőid listáját. A listát az <strong>oszlopok fejlécére</strong> kattintva rendezheted. Az <strong>teendők címére kattintva</strong> megnyithatod az adott elem részletes leírását.</p>
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

<?php createNav("list")?>

<main>
    <table class="todolist">
        <caption>A teendőid</caption>
        <tr>
            <th id="todo">Teendő</th>
            <th id="tags">Címkék</th>
            <th id="duedate">Határidő</th>
            <th id="status">Állapot</th>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Mama receptje első lépés</a></td>
            <td headers="tags">Fontos, Gasztro</td>
            <td headers="duedate">2021.03.29.</td>
            <td headers="status">Folyamatban</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Mama receptje második lépés</a></td>
            <td headers="tags">Fontos, Gasztro</td>
            <td headers="duedate">2021.03.29.</td>
            <td headers="status">Folyamatban</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Mama receptje harmadik lépés</a></td>
            <td headers="tags">Fontos, Gasztro</td>
            <td headers="duedate">2021.03.29.</td>
            <td headers="status">Folyamatban</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Világbéke</a></td>
            <td headers="tags">Ráér, Kihalás</td>
            <td headers="duedate">2077.11.20.</td>
            <td headers="status">Folyamatban</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">A hegyvidéken temess el engem</a></td>
            <td headers="tags">Fontos, Forradalom</td>
            <td headers="duedate">2021.03.27.</td>
            <td headers="status">Kész</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Élesebb legyél a késnél</a></td>
            <td headers="tags">Normál, Forradalom</td>
            <td headers="duedate">2021.04.14.</td>
            <td headers="status">Folyamatban</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">A munka ünnepét munkával ünnepelni</a></td>
            <td headers="tags">Normál, Meló</td>
            <td headers="duedate">2021.05.01.</td>
            <td headers="status">Később</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Szénlábnyom alá szénpapucsot!</a></td>
            <td headers="tags">Normál, Kihalás</td>
            <td headers="duedate">2021.03.29.</td>
            <td headers="status">Folyamatban</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Szerződést levinni Manyikának</a></td>
            <td headers="tags">Fontos, Meló</td>
            <td headers="duedate">2021.03.20.</td>
            <td headers="status">Kész</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Zuzu Petalsszal társalogni</a></td>
            <td headers="tags">Ráér, Meló</td>
            <td headers="duedate">2021.04.05.</td>
            <td headers="status">Később</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Látni olyan dolgokat, amiket ti emberek el sem hinnétek</a></td>
            <td headers="tags">Fontos, Meló</td>
            <td headers="duedate">2019.10.05.</td>
            <td headers="status">Kész</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Nem ehetek juharszirup és fogpiszkáló nélkül.</a></td>
            <td headers="tags">Fontos, Gasztro</td>
            <td headers="duedate">2021.04.01.</td>
            <td headers="status">Folyamatban</td>
        </tr>
        <tr class="todolistitem">
            <td headers="todo"><a href="todo_details.html">Mene, Mene, Tekel, Ufarszin!</a></td>
            <td headers="tags">Fontos, Kihalás</td>
            <td headers="duedate">2001.01.01.</td>
            <td headers="status">Elnapolva</td>
        </tr>
    </table>
</main>

<?php commissarPanel()?>

<?php footerPanel()?>

</body>

</html>