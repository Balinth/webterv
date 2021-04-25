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
            <?php headerPanel() ?>
        </div>
        </div>
    </header>

    <?php createNav("details")?>

<main>
    <?php
        $todo = $_SESSION['registeredUsers'][$_SESSION['user']]->getTodos()[$_GET['todo']];
    ?>
    <fieldset id="details">
        <legend><h2>Teendő adatai</h2></legend>
        <fieldset>
            <legend>Teendő</legend>
            <p><?php echo $todo->getName(); ?></p>
        </fieldset>
        <fieldset>
            <legend>Címkék</legend>
            <p><?php echo $todo->getTags(); ?></p>
        </fieldset>
        <fieldset>
            <legend>Határidő</legend>
            <p><?php echo $todo->getDue(); ?></p>
        </fieldset>
        <fieldset>
            <legend>Állapot</legend>
            <p><?php echo $todo->getState(); ?></p>
        </fieldset>
        <fieldset>
            <legend>Leírás</legend>
            <p><?php echo $todo->getDesc(); ?></p>
        </fieldset>
            <?php
                echo(
                    '<form action="todo_datarec.php">
                        <input class="buttoninput ok" id="modify" name="todo"  type="submit" value="Módosítom" />
                        <input type="hidden" name="todo" value="' . $_GET['todo'] . '" />
                    </form>
                    '
                );
            ?>
            <input class="buttoninput cancel" id="cancel" name="cancel" type="button" value="Mégse" onclick="window.location.href='todo_list.php'"/>
    </fieldset>

</main>

<?php commissarPanel()?>

<?php footerPanel()?>

</body>

</html>