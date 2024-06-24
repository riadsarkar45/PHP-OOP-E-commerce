<?php
class client_controller
{
    public $connect;
    public function __construct($databasePath)
    {
        require_once($databasePath);
        $databaseObject = new Database_connection;
        $this->connect = $databaseObject->connect();
    }



    public function fetchData($tableName, $whereColumn = NULL, $secondWhereColumn = null, $orderBy = NULL, $orderType)
    {
        $sql = "SELECT * FROM $tableName";
        if ($whereColumn !== null) {
            $sql .= " WHERE $whereColumn";
        }
        if ($secondWhereColumn !== null) {
            $sql .= " AND $secondWhereColumn";
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

    public function deleteData($whereColumn, $table)
    {
        $sql = "DELETE FROM $table $whereColumn";
        $stmt = $this->connect->prepare($sql);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
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

    public function editData($data, $tableName, $whereClause)
    {
        $setPart = '';
        foreach ($data as $column => $value) {
            $setPart .= "$column = :$column, ";
        }
        $setPart = rtrim($setPart, ', ');
        $sql = "UPDATE $tableName SET $setPart WHERE $whereClause";
        $stmt = $this->connect->prepare($sql);
        foreach ($data as $column => &$value) {
            $stmt->bindParam(":$column", $value);
        }
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
