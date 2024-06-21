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

    public function confirmOrder($orderedProducts)
    {
        $qty = 33;
        foreach ($orderedProducts as $row) {
            $sql = "INSERT INTO orders (user_id, date, product_id, qty) VALUES (:user_id, :date, :product_id, :qty)";
            $inst = $this->connect->prepare($sql);
            $inst->bindParam(':user_id', $row['user_id']);
            $inst->bindParam(':date', $row['date']);
            $inst->bindParam(':product_id', $row['product_id']);
            $inst->bindParam(':qty', $qty);
            $inst->execute();
            if ($inst) {
                return true;
            } else {
                return false;
            }
        }
    }
}
