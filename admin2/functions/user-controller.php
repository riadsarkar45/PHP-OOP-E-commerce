<?php

class User_controller
{
    public $connect;

    private $userId;
    private $userEmail;
    private $userPassword;
    private $userName;

    public function __construct()
    {
        require_once("../admin2/includes/database_connection.php");
        $databaseObject = new Database_connection;
        $this->connect = $databaseObject->connect();

    }


    function setUserId($userId)
    {
        $this->userId = $userId;
    }

    function getUserId()
    {
        return $this->userId;
    }

    function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    function getUserEmail()
    {
        return $this->userEmail;
    }

    function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    }

    function getUserPassword()
    {
        return $this->userPassword;
    }

    function setUserName($userName)
    {
        $this->userName = $userName;
    }

    function getUserName()
    {
        return $this->userName;
    }
}
