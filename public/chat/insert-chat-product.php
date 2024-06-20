<?php
include('../../admin2/includes/session.php');
require_once('chat-rooms.php');

foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}

$chatRooms = new Chat_rooms('../../admin2/includes/database_connection.php');

// Get parameters
$chatId = isset($_GET['c']) ? $_GET['c'] : "";
$productId = isset($_GET['p']) ? $_GET['p'] : "";
$productName = isset($_GET['pn']) ? $_GET['pn'] : "";

// Set parameters
$chatRooms->setSenderId($login_user_id);
$chatRooms->setReceiverId($chatId);
$chatRooms->setMessage($productName);
$chatRooms->setProductId($productId);
$chatRooms->setUserId($login_user_id);

// Insert chat
if ($chatRooms->insertChat()) {
    echo 'Message sent successfully.';
} else {
    echo 'Failed to send the message. Please try again later.';
}
