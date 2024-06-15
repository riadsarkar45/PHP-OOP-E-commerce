<?php
require_once('chat-rooms.php');
require_once('../../admin2/includes/session.php');
$chatMessages = new Chat_rooms('../../admin2/includes/database_connection.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}
$chatHistory = $chatMessages->getChatMessages($login_user_id, $_GET['c']);

if ($chatHistory) {
    foreach ($chatHistory as $rows) {

?>

        <?php

        if (isset($rows['receiver_Id']) && $rows['receiver_Id'] == $login_user_id) {



        ?>

            <div class="flex justify-start">
                <div class="bg-green-100 p-3 rounded-lg shadow-sm">
                    <p class="text-sm"><?php echo $rows['msg']; ?></p>
                    <span class="text-xs text-gray-500">8:57 PM</span>
                </div>
            </div>

        <?php } elseif (isset($rows['sender_id']) && $rows['sender_id'] == $login_user_id) { ?>

            <div class="flex justify-end">
                <div class="bg-gray-100 p-3 rounded-lg shadow-sm">
                    <p class="text-sm"><?php echo $rows['msg']; ?></p>
                    <span class="text-xs text-gray-500">5:31 PM</span>
                </div>
            </div>
        <?php } ?>
    <?php
    }
} else { ?>
    <h2>Start Chatting with the store owner</h2>
<?php } ?>