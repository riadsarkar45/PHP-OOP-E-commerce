<?php
include('../../admin2/includes/session.php');
require_once('chat-rooms.php');
$chatMessages = new Chat_rooms('../../admin2/includes/database_connection.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}
$chatHistory = $chatMessages->getChatMessages($login_user_id, $_GET['c']);
$chatList = $chatMessages->getChatLists($login_user_id, $_GET['c'], $login_user_id);
$msg = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Chat with store owner</title>
</head>

<body class="bg-gray-100">

    <div class="flex flex-col md:flex-row h-screen">
        <!-- Sidebar -->
        <div class="flex-none w-full md:w-1/3 lg:w-1/4 bg-white p-4 border-r border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold">Chats</h2>
                <button class="text-green-500">New Chat</button>
            </div>
            <input type="text" placeholder="Search or start a new chat" class="mt-4 w-full p-2 border rounded-md">

            <!-- Chat List -->
            <div>
                <div id="chatted-lists" class="mt-4 space-y-4">
                    <?php
                    if ($chatList) {
                        foreach ($chatList as $rows) {


                    ?>

                            <?php if ($rows['receiver_Id'] == $login_user_id) { ?>
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
                            <?php } elseif ($rows['sender_Id'] == $login_user_id) { ?>

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
                            <?php } ?>

                        <?php
                        }
                    } else { ?>
                        <h2>You haven't chatted with someone. Start chatting now.</h2>
                    <?php } ?>

                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="flex-1 flex flex-col bg-gray-50">
            <div class="flex-none p-4 border-b border-gray-200">
                <h2 class="text-xl font-bold">Mahfuzur Rahaman Sir Bank (MNG)</h2>
                <p class="text-sm text-gray-500">Last seen today at 5:39 PM</p>
                <button id="sendProductBtn" class="bg-green-500 p-2 rounded mt-4 bg-opacity-35 border text-white font-bold text-serif border-green-500">Send Product</button>
                <div id="result"></div>

            </div>



            <div id="history" class="flex-1 overflow-y-auto p-4 space-y-4">
                <?php
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


                <!-- Add more messages as needed -->
            </div>
            <form id="myForm" enctype="multipart/form-data">
                <div class="chatbox-input flex p-2 gap-2">
                    <i class="fa-regular fa-face-grin"></i>
                    <i class="fa-sharp fa-solid fa-paperclip"></i>
                    <input class="p-2 w-full" type="text" id="name" name="message" placeholder="Type a message">
                    <button class="border p-1 rounded" type="submit">Send</button>

                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function get_chats_instantly() {
        jQuery.ajax({
            url: 'instant-chat-history.php?c=<?php echo $_GET['c']; ?>',
            success: function(result) {
                jQuery('#history').html(result);
            }
        });
    }
    setInterval(function() {
        get_chats_instantly();
    }, 1000);

    function get_chatted_list_instantly() {
        jQuery.ajax({
            url: 'instant-chat-list.php?c=<?php echo $_GET['c']; ?>',
            success: function(result) {
                jQuery('#chatted-lists').html(result);
            }
        });
    }
    setInterval(function() {
        get_chatted_list_instantly();
    }, 1000);



    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: 'insert-chat.php?c=<?php echo $_GET['c']; ?>',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#name').val('');
                    $('#file').val('');
                    $('#result').html(response);
                },
                error: function(xhr, status, error) {
                    alert('AJAX request error: ' + error);
                }
            });
        });
    });
</script>




</html>