<?php
class Chat_rooms
{
    public $connect;
    private $userId;
    private $senderId;
    private $receiverId;
    private $message;

    public function __construct($databasePath)
    {
        require_once($databasePath);
        $databaseObject = new Database_connection;
        $this->connect = $databaseObject->connect();
    }

    function setSenderId($senderId)
    {
        $this->senderId = $senderId;
    }

    function getSenderId()
    {
        return $this->senderId;
    }

    function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;
    }

    function getReceiverId()
    {
        return $this->receiverId;
    }

    function setMessage($message)
    {
        $this->message = $message;
    }

    function getMessage()
    {
        return $this->message;
    }

    function setUserId($userId)
    {
        $this->userId = $userId;
    }

    function getUserId()
    {
        return $this->userId;
    }

    function insertChat()
    {
        $status = 'OFF';
        $query = "INSERT INTO chats (sender_id, receiver_id, msg, userId, status) VALUES (:sender_id, :receiver_id, :message, :userId, :status)";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':sender_id', $this->senderId, PDO::PARAM_INT);
        $stmt->bindParam(':receiver_id', $this->receiverId, PDO::PARAM_INT);
        $stmt->bindParam(':message', $this->message, PDO::PARAM_STR);
        $stmt->bindParam(':userId', $this->userId, PDO::PARAM_INT);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $query = "SELECT * FROM chat_list";
            $stmt = $this->connect->prepare($query);
            $stmt->execute();
            $all_post = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $found = false;
            foreach ($all_post as $rows) {
                if ($rows['sender_Id'] == $this->userId && $rows['receiver_Id'] == $this->receiverId) {
                    $history = "UPDATE chat_list SET sender_Id = :sender_id, msg = :message, user_id = :user_id, status = 'OFF' WHERE sender_Id = :current_sender_id AND receiver_Id = :current_receiver_id";
                    $updateStmt = $this->connect->prepare($history);
                    $updateStmt->bindParam(':sender_id', $this->userId, PDO::PARAM_INT);
                    $updateStmt->bindParam(':message', $this->message, PDO::PARAM_STR);
                    $updateStmt->bindParam(':user_id', $this->userId, PDO::PARAM_INT);
                    $updateStmt->bindParam(':current_sender_id', $rows['sender_Id'], PDO::PARAM_INT);
                    $updateStmt->bindParam(':current_receiver_id', $rows['receiver_Id'], PDO::PARAM_INT);
                    $updateStmt->execute();
                    $found = true;
                    break;
                } elseif ($rows['receiver_Id'] == $this->userId && $rows['sender_Id'] == $this->receiverId) {
                    $history = "UPDATE chat_list SET sender_Id = :sender_id, receiver_Id = :receiver_id, msg = :message, user_id = :user_id, status = 'OFF' WHERE sender_Id = :current_sender_id AND receiver_Id = :current_receiver_id";
                    $updateStmt = $this->connect->prepare($history);
                    $updateStmt->bindParam(':sender_id', $this->senderId, PDO::PARAM_INT);
                    $updateStmt->bindParam(':receiver_id', $this->receiverId, PDO::PARAM_INT);
                    $updateStmt->bindParam(':message', $this->message, PDO::PARAM_STR);
                    $updateStmt->bindParam(':user_id', $this->userId, PDO::PARAM_INT);
                    $updateStmt->bindParam(':current_sender_id', $rows['sender_Id'], PDO::PARAM_INT);
                    $updateStmt->bindParam(':current_receiver_id', $rows['receiver_Id'], PDO::PARAM_INT);
                    $updateStmt->execute();
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $history = "INSERT INTO chat_list (sender_Id, receiver_Id, msg, user_id, status) VALUES (:sender_id, :receiver_id, :message, :userId, :status)";
                $chat = $this->connect->prepare($history);
                $chat->bindParam(':sender_id', $this->senderId, PDO::PARAM_INT);
                $chat->bindParam(':receiver_id', $this->receiverId, PDO::PARAM_INT);
                $chat->bindParam(':message', $this->message, PDO::PARAM_STR);
                $chat->bindParam(':userId', $this->userId, PDO::PARAM_INT);
                $chat->bindParam(':status', $status, PDO::PARAM_STR);
                $chat->execute();
            }
            return true;
        } else {
            return false;
        }
    }

    function getChatMessages($senderId, $receiverId)
    {
        $query = "SELECT * FROM chats WHERE (sender_id = :senderId AND receiver_id = :receiverId) OR (sender_id = :receiverId AND receiver_id = :senderId)";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':senderId', $senderId, PDO::PARAM_INT);
        $stmt->bindParam(':receiverId', $receiverId, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $results;
        } else {
            return false;
        }
    }

    function getChatLists($senderId, $receiverId, $sessionId)
    {
        $query = "SELECT * FROM chat_list WHERE sender_Id = :sender_Id or receiver_Id = :receiver_Id";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':sender_Id', $sessionId);
        $stmt->bindParam(':receiver_Id', $sessionId);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $results;
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
}
