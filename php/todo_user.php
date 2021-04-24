<?php

class User
{
    private $username;
    private $loginpw;
    private $logineml;
    private $userpic;

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
        $this->logineml = $loginpw;
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


    public function tofile()
    {
        $user = [
            "username" => $this->username,
            "loginpw" => $this->loginpw,
            "logineml" => $this->logineml,    
            "userpic" => $this->userpic,    
        ]
    }

}
