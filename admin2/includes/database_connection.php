<?php 

class Database_connection{
    function connect(){
        $connect = new PDO("mysql:host=localhost; dbname=commerce", "root", "");
        return $connect;
    }
}