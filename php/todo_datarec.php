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
                <p>Itt vehetsz fel új teendőket.</p>
                <p>Add meg az adatokat. Ha minden okés, <strong>Rögzít</strong>. Ha nagyon elrontottad, kezdd <strong>Újra</strong>. Ha mégsem vennél fel új teendőt, <strong>Mégse</strong>, és örülj, hogy ennyivel is kevesebb a teendőd.</p>
            </section>
            <?php headerPanel() ?>
        </div>
        </div>
    </header>

    <?php createNav("datarec")?>

<main>
    <fieldset id="todoform">
        <legend>Teendő adatai</legend>
        <form action="datarec.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off">
            <label class="inputlabel" for="todotitle">Teendő</label><input class="textinput" id="todotitle" name="todotitle" type="text" size="100" maxlength="100" placeholder="Teendő címe" required /> <br />
            <label class="inputlabel" for="todotags">Címkék</label><input class="textinput" id="todotags" name="todotags" type="text" size="100" maxlength="100" placeholder="Címkék" /><br />
            <label class="inputlabel" for="tododescription">Leírás</label><textarea class="textinput" id="tododescription" name="tododescription" cols="100" rows="10" maxlength="1000" placeholder="Teendő leírása (max. 1000 karakter)"></textarea><br />
            <label class="inputlabel" for="tododuedate">Határidő</label><input class="dateinput" id="tododuedate" name="tododuedate" type="date" required /><br />
            <label class="inputlabel" for="todostatus">Állapot</label><select class="textinput" id="todostatus" name="todostatus" required>
                <option value="Folyamatban" selected>Folyamatban</option>
                <option value="Kész">Kész</option>
                <option value="Később">Később</option>
                <option value="Elnapolva">Elnapolva</option>
            </select> <br />
            <?php
                if(isset($_GET['todo'])){
                    echo '<input type="hidden" name="todo" value="' . $_GET['todo'] . '"/>';
                }
            ?>
            <input class="buttoninput ok" id="submit" name="submit" type="submit" value="Rögzít" />
            <input class="buttoninput cancel" id="reset" name="reset" type="reset" value="Újra" />
            <input class="buttoninput cancel" id="cancel" name="cancel" type="button" value="Mégse" onclick="window.location.href='todo_list.php'"/>
        </form>
    </fieldset>
</main>

<?php commissarPanel()?>

<?php footerPanel()?>

</body>

</html>