<?php
    session_start();
    include 'todo_user.php';
    include_once 'todo_item.php';
    include_once 'todo_userslisting.php';

    $newTodo = new Todo(
        $_POST['todotitle'],
        $_POST['todotags'],
        $_POST['tododescription'],
        $_POST['tododuedate'],
        $_POST['todostatus']);

    if (isset($_SESSION['user'])
    && array_key_exists($_SESSION['user'], $_SESSION['registeredUsers'])){
        $user = $_SESSION['registeredUsers'][$_SESSION['user']];
        $todos = $user->getTodos();
        if($todos == null)
        {
            $todos = [];
        }
        if(isset($_POST['todo'])){
            $todos[$_POST['todo']] = $newTodo;
        }
        else {
            array_push($todos, $newTodo);
        }
        $user->setTodos($todos);
        $user->saveTodoFile();
    
    }

    header("Location: todo_list.php");
?>