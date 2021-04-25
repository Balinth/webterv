<!DOCTYPE html>
<html lang="en">

<?php
include_once "todo_head.php";
include_once "panel_header.php";
include_once "panel_footer.php";
include_once "panel_commissar.php";

if(isset($_SESSION['user']) == false || $_SESSION['user'] == null){
    header('Location: index.php');
    return;
}

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
            <?php headerPanel() ?>
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

        <?php
        $todos = $_SESSION['registeredUsers'][$_SESSION['user']]->getTodos();
        if($todos != null)
        {
            for($i=0; $i < count($todos); $i++){
                $todo = $todos[$i];
                echo '<tr class="todolistitem">
                <td headers="todo"><a href="todo_details.php?todo=' . $i . '">' . $todo->getName() . '</a></td>
                <td headers="tags">' . $todo->getTags() .'</td>
                <td headers="duedate">' . $todo->getDue() .'</td>
                <td headers="status">' . $todo->getState() .'</td>
            </tr> ';
            }
        }
        else {
            echo '<h1>Nincs teendőd!</h1>';
        }
        ?>

    </table>
</main>

<?php commissarPanel()?>

<?php footerPanel()?>

</body>

</html>