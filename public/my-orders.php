<?php
require_once('../admin2/includes/session.php');
require_once('functions/client-controller.php');
$clientController = new client_controller('../admin2/includes/database_connection.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}
$orders = $clientController->fetchData('orders', 'user_id = ' . $login_user_id, null, 'id', 'desc');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100">
    <div>
        <?php require_once("includes/include-header.php") ?>
        <div class="w-[70rem] m-auto flex mt-8 justify-between gap-3">
            <div class="">
                <div class="w-[19rem] bg-white shadow rounded mb-3">
                    <h2 class="border-b border-gray-300 p-2">Manage My Account</h2>
                    <div class="p-2">
                        <h2 class="border-b p-1">My Profile</h2>
                        <h2 class="border-b p-1">Address Book</h2>
                        <h2 class="border-b p-1">My Reviews</h2>
                        <h2 class="border-b p-1">My Wished List</h2>
                        <h2 class="p-1">My Followed Stores</h2>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="flex border-b border-gray-300 bg-white rounded shadow p-1">
                    <button class="tab-link px-4 py-2 text-blue-600 border-b-2 border-blue-600 font-semibold focus:outline-none" data-tab="tab1">All</button>
                    <button class="tab-link px-4 py-2 text-gray-600 hover:text-blue-600 focus:outline-none" data-tab="tab2">To Pay</button>
                    <button class="tab-link px-4 py-2 text-gray-600 hover:text-blue-600 focus:outline-none" data-tab="tab3">To Ship</button>
                    <button class="tab-link px-4 py-2 text-gray-600 hover:text-blue-600 focus:outline-none" data-tab="tab4">To Receive</button>
                    <button class="tab-link px-4 py-2 text-gray-600 hover:text-blue-600 focus:outline-none" data-tab="tab5">Settings</button>
                </div>
                <div class="tab-content mt-4">
                    <div id="tab1" class="tab-pane">
                        <?php
                        if ($orders) {
                            foreach ($orders as $row) {
                                $products = $clientController->fetchData('products', 'product_id = ' . $row['product_id'], null, 'product_id', 'desc');
                                foreach ($products as $rows) {
                        ?>
                                    <div class="bg-white mb-3 p-2 rounded shadow">
                                        <div class="flex border-b border-gray-300 p-1 justify-between mb-3 items-center ">
                                            <div class="">
                                                <h2>Order # <?php echo $row['id'] ?></h2>
                                                <small>Placed on <?php echo $row['date'] ?></small>
                                            </div>
                                            <div>
                                                <h2>Manage</h2>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <div class="flex gap-4 items-center">
                                                <img class="w-[6rem] h-[6rem]" src="../admin2/images/<?php echo $rows['image'] ?>" alt="">
                                                <h2> <?php echo $rows['product_title'] ?></h2>
                                            </div>
                                            <div>
                                                <h2>Qty: <?php echo $rows['product_qty'] ?></h2>
                                            </div>
                                            <div>
                                                <h2>To Shipment</h2>
                                            </div>
                                            <div>
                                                <h2>Delivered on 22 Jul 2023</h2>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            }
                        } else { ?>
                            <div class="bg-red-500 p-2 border bg-opacity-25 border-red-500 rounded shadow text-red-800">
                                <h2>No product found</h2>
                            </div>
                        <?php } ?>


                    </div>
                    <div id="tab2" class="tab-pane hidden">
                        <p>To Pay.</p>
                    </div>
                    <div id="tab3" class="tab-pane hidden">
                        <p>To Ship</p>
                    </div>
                    <div id="tab4" class="tab-pane hidden">
                        <p>To Receive</p>
                    </div>
                    <div id="tab5" class="tab-pane hidden">
                        <p>Settings</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.tab-link');
                const panes = document.querySelectorAll('.tab-pane');

                tabs.forEach(tab => {
                    tab.addEventListener('click', function() {
                        const target = document.getElementById(this.dataset.tab);

                        tabs.forEach(t => t.classList.remove('text-blue-600', 'border-blue-600', 'font-semibold'));
                        tab.classList.add('text-blue-600', 'border-blue-600', 'font-semibold');

                        panes.forEach(p => p.classList.add('hidden'));
                        target.classList.remove('hidden');
                    });
                });
            });
        </script>
    </div>
    </div>
</body>

</html>