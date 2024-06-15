<?php

class Database_connection_public
{
    public $connect;
    function __construct()
    {
        require_once("../../admin2/includes/database_connection.php");
        $connection = new Database_connection;
        $connection->connect();
    }

    public function fetchData($tableName, $whereColumn = NULL, $orderBy = NULL, $orderType)
    {
        $sql = "SELECT * FROM $tableName";
        if ($whereColumn !== null) {
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
}
