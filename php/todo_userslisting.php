<?php
include_once "todo_user.php";
include_once "todo_item.php";
$file = fopen("../profile/users.txt", "a+");
$_SESSION["registeredUsers"] = [];
while (($line = fgets($file)) !== false){
    $item = unserialize($line);
    $newUser = new User($item["username"],$item["loginpw"],$item["logineml"],$item["userpic"]);

    $todoFileName = '../profile/' . $item['logineml']. '_todos.txt';
    if(file_exists($todoFileName)){
        $todos = unserialize(file_get_contents($todoFileName));
        $newUser->setTodos($todos);
    }


    $_SESSION["registeredUsers"][$item['logineml']] = $newUser;
}

fclose($file);

?>
