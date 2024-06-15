<?php
include('../../admin2/includes/session.php');
require_once('chat-rooms.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}
$msg = '';
    $chatRooms = new Chat_rooms('../../admin2/includes/database_connection.php');

    $senderId = $chatRooms->setSenderId($login_user_id);
    $receiverId = $chatRooms->setReceiverId($_GET['c']);
    $message = $chatRooms->setMessage($_POST['message']);
    $userId = $chatRooms->setUserId($login_user_id);
    if ($chatRooms->insertChat()) {
        $msg = '';
    } else {
        $msg = 'Failed to send the message. Please try again later.';
    }
