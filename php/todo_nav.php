<?php


function createHeader(){
    echo '';
}

function currentNav($current){
    return '<div class="sidenavCurrent">' . $current . '</div>';
}

function createNav($user, $onPage){

    $begin = '<nav class="sidenav">';
    $end = '</nav>';

    
    $landing = '
    <a href="index.php" target="_self">Kezdőlap</a>
    ';
    $signout = '
    <a href="index.php" target="_self">Kijelentkezés</a>
    ';
    $list = '
    <a href="todo_list.php" target="_self">Teendők</a>
    ';
    $datarec = '
    <a href="todo_datarec.php" target="_self">Rögzítés</a>
    ';
    $settings = '
    <a href="todo_settings.php" target="_self">Beállítások</a>
    ';
    $details = '
    <a href="todo_details.php" target="_self">Részletek</a>
    ';

    if($user == null){
        echo($begin . currentNav($landing) . $end);
    }
    else if($onPage == "details"){
        echo($begin . $list . currentNav($details) . $datarec . $settings . $signout . $end);
    }
    else if($onPage == "list"){
        echo($begin . currentNav($list) . $details . $datarec . $settings . $signout . $end);
    }
    else if($onPage == "settings"){
        echo($begin . $list . $details . $datarec . currentNav($settings) . $signout . $end);
    }
    else if($onPage == "datarec"){
        echo($begin . $list . $details . currentNav($datarec) . $settings . $signout . $end);
    }
    return;
}


?>