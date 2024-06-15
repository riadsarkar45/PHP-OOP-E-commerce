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

    public function deleteData($id, $table)
    {
        $sql = "DELETE FROM $table WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":id", $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
