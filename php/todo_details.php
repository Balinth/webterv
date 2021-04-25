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
                <h1>Teendő részletei</h1>
                <p>Itt tekintheted meg a kiválasztott teendőt.</p>
                <p>A teendők módósításához <strong>Módosítom</strong>. Vagy ha visszalépnél a listára, <strong>Mégse</strong>.</p>
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

    <?php createNav("details")?>

<main>
    <fieldset id="details">
        <legend><h2>Teendő adatai</h2></legend>
        <fieldset>
            <legend>Teendő</legend>
            <p>Mene, Mene, Tekel, Ufarszin!</p>
        </fieldset>
        <fieldset>
            <legend>Címkék</legend>
            <p>Fontos, Kihalás</p>
        </fieldset>
        <fieldset>
            <legend>Határidő</legend>
            <p>2001.01.01</p>
        </fieldset>
        <fieldset>
            <legend>Állapot</legend>
            <p>Elnapolva</p>
        </fieldset>
        <fieldset>
            <legend>Leírás</legend>
            <p>Mene, Mene, Tekel, Ufarszin! Ez pedig e szavaknak az értelme: Mene, azaz számba vette Isten a te országlásodat és véget vet annak. Tekel, azaz megmérettél a mérlegen és híjjával találtattál. Peresz, azaz elosztatott a te országod és adatott a médeknek és persáknak.</p>
        </fieldset>
        <fieldset>
            <legend>Rögzítve</legend>
            <p>2000.12.31</p>
        </fieldset>
        <fieldset>
            <legend>Utolsó módosítás</legend>
            <p>2001.01.01</p>
        </fieldset>
            <input class="buttoninput ok" id="modify" name="cancel" type="button" value="Módosítom" onclick="window.location.href='todo_datarec.html'"/>
            <input class="buttoninput cancel" id="cancel" name="cancel" type="button" value="Mégse" onclick="window.location.href='todo_list.html'"/>
    </fieldset>

</main>

<?php commissarPanel()?>

<?php footerPanel()?>

</body>

</html>