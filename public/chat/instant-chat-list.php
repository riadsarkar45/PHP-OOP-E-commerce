<?php

include('../../admin2/includes/session.php');
require_once('chat-rooms.php');
$chatMessages = new Chat_rooms('../../admin2/includes/database_connection.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}
$chatList = $chatMessages->getChatLists($login_user_id, $_GET['c'], $login_user_id);

?>

<div id="chatted-lists" class="mt-4 space-y-4">
    <?php
    if ($chatList) {
        foreach ($chatList as $rows) {


    ?>

            <?php if ($rows['receiver_Id'] == $login_user_id) { ?>
                <a href="chat.php?c=<?php echo $rows['sender_Id'] ?>">
                    <div class="flex items-center p-2 hover:bg-gray-100 cursor-pointer">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-semibold"><?php echo $rows['sender_Id']; ?></h3>
                            <p class="text-xs text-gray-500"><?php echo $rows['msg']; ?></p>
                        </div>
                        <div class="ml-auto text-xs text-gray-500">6/1/2024</div>
                    </div>
                </a>
            <?php } elseif ($rows['sender_Id'] == $login_user_id) { ?>

                <a href="chat.php?c=<?php echo $rows['receiver_Id'] ?>">
                    <div class="flex items-center p-2 hover:bg-gray-100 cursor-pointer">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile Picture">
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-semibold"><?php echo $rows['receiver_Id']; ?></h3>
                            <p class="text-xs text-gray-500"><?php echo $rows['msg']; ?></p>
                        </div>
                        <div class="ml-auto text-xs text-gray-500">6/1/2024</div>
                    </div>
                </a>
            <?php } ?>

        <?php
        }
    } else { ?>
        <h2>You haven't chatted with someone. Start chatting now.</h2>
    <?php } ?>

</div>