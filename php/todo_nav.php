<?php


function createHeader(){
    echo '';
}


function enclose($begin, $content, $end){
    echo $begin;
    echo $content;
    echo $end;
}

function createNav($user, $onPage){

    $begin = '<nav class="sidenav">';
    $end = '</nav>';

    
    $landing = '
    <a href="todo_landing.html" target="_self">Kezdőlap</a>
    ';

    if($user == null){
        enclose($begin, $landing, $end);
        return;
    }
}


?>