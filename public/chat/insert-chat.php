<?php
include('../../admin2/includes/session.php');
require_once('chat-rooms.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['store_id'];
}
$msg = '';
$chatRooms = new Chat_rooms('../../admin2/includes/database_connection.php');

$senderId = $chatRooms->setSenderId($login_user_id);
$receiverId = $chatRooms->setReceiverId($_GET['c']);
$msg = isset($_POST['name1']) ? $_POST['name1'] : "";
$message = $chatRooms->setMessage(isset($_POST['message']) ? $_POST['message'] : "");
$userId = $chatRooms->setUserId($login_user_id);
if ($chatRooms->insertChat()) {
    $msg = '';
} else {
    $msg = 'Failed to send the message. Please try again later.';
}
?>