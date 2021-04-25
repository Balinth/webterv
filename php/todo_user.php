<?php

include_once 'todo_item.php';

class User
{
    private $username;
    private $loginpw;
    private $logineml;
    private $userpic;

    private $todos;

    /**
     * User constructor
     * @param $username
     * @param $loginpw
     * @param $logineml
     * @param $userpic
     */
    public function __construct($username, $loginpw, $logineml, $userpic)
    {
        $this->username = $username;
        $this->loginpw = $loginpw;
        $this->logineml = $logineml;
        $this->userpic = $userpic;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getLoginpw()
    {
        return $this->loginpw;
    }

    /**
     * @param mixed $loginpw
     */
    public function setLoginpw($loginpw): void
    {
        $this->loginpw = $loginpw;
    }

    /**
     * @return mixed
     */
    public function getLogineml()
    {
        return $this->logineml;
    }

    /**
     * @param mixed $logineml
     */
    public function setLogineml($logineml): void
    {
        $this->logineml = $logineml;
    }

    /**
     * @return mixed
     */
    public function getUserpic()
    {
        return $this->userpic;
    }

    /**
     * @param mixed $userpic
     */
    public function setUserpic($userpic): void
    {
        $this->userpic = $userpic;
    }

    /**
     * @return mixed
     */
    public function getTodos()
    {
        return $this->todos;
    }

    public function setTodos($todos): void
    {
        $this->todos = $todos;
    }

    public function saveTodoFile() : void
    {
        $todoFile = fopen('../profile/' . $this->logineml . '_todos.txt', 'w');
        fwrite($todoFile, serialize($this->todos));
        fclose($todoFile);
    }

    public function tofile()
    {
        $user = [
            "username" => $this->username,
            "loginpw" => $this->loginpw,
            "logineml" => $this->logineml,    
            "userpic" => $this->userpic,    
        ];
        $file = fopen("../profile/users.txt", "a");
        fwrite($file, serialize($user) ."\n");
        $this->saveTodoFile();
        fclose($file);
    }

    public function changefile()
    {
        $user = [
            "username" => $this->username,
            "loginpw" => $this->loginpw,
            "logineml" => $this->logineml,    
            "userpic" => $this->userpic,    
        ];
        $file = fopen("../profile/users.txt", "a+");
        $dumpfile = fopen("../profile/usersdump.txt", "a+");
        while (($line = fgets($file)) !== false){
            $item = unserialize($line);
            if($item["logineml"] !== $_SESSION["user"]){
                fwrite($dumpfile, serialize($item) ."\n");
            }
        }
        fclose($file);
        unlink("../profile/users.txt");

        $file = fopen("../profile/users.txt", "a+");
        while (($line = fgets($dumpfile)) !== false){
            $item = unserialize($line);
            fwrite($file, serialize($item) ."\n");
        }
        fclose($dumpfile);
        unlink("../profile/usersdump.txt");

        fwrite($file, serialize($user) ."\n");
        fclose($file);
    }

}

?>