<?php

class posts_Controller
{
    public $connect;

    public function __construct()
    {
        require_once("../admin2/includes/database_connection.php");
        $databaseObject = new Database_connection;
        $this->connect = $databaseObject->connect();
    }


    public function insertData($data, $table)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = $this->connect->prepare($sql);

        foreach ($data as $key => &$value) {
            $stmt->bindParam(":$key", $value);
        }

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function fetchData($tableName, $whereColumn = NULL, $orderBy = NULL, $orderType)
    {
        $sql = "SELECT * FROM $tableName";
        if ($whereColumn !== NULL) {
            $sql .= " WHERE $whereColumn";
        }
        if ($orderBy !== NULL) {
            $sql .= " ORDER BY $orderBy $orderType";
        }
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $results;
        } else {
            return false;
        }
    }

    public function checkDataExistOrNot($table, $where, $checkValue)
    {
        $checkedData = null;
        $stmt = $this->connect->prepare("SELECT * FROM $table WHERE $where = :checkValue");
        $stmt->bindParam(':checkValue', $checkValue);
        if ($stmt->execute()) {
            $checkedData = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $checkedData;
    }

    public function checkFollowingOrNotFollowingTheStore()
    {
        $dbName = 'Following';
        
    }
}
