<?php
require_once('../admin2/includes/session.php');
require_once('functions/client-controller.php');
$postsControl = new client_controller('../admin2/includes/database_connection.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}
$cartItem = $postsControl->fetchData('cart', 'user_id = ' . $login_user_id, null, null, null);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Shopping Cart</title>
</head>

<body class="bg-gray-100 font-serif">
    <!-- header section start -->
    <?php require_once('includes/include-header.php'); ?>
    <!-- header section end -->
    <div class="w-[70rem] m-auto mt-5">
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="w-full md:w-2/3 bg-white p-4 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-4">Shopping Bag</h2>
                    <p class="mb-4"><?php // echo count($cartItem); ?> items in your bag</p>
                    <?php
                    $total = 0; // Initialize total cost
                    $itemsByStore = []; // Initialize an array to group items by store

                    if ($cartItem) {
                        foreach ($cartItem as $row) {
                            $getProductDetail = $postsControl->fetchData('products', 'product_id = ' . $row['product_id'], null, null, null);
                            foreach ($getProductDetail as $rows) {
                                $pro = $rows['product_price'];
                                $total += $pro;

                                $getStoreName = $postsControl->fetchData('store_name', 'id = ' . $rows['store_id'], null, null, null);
                                foreach ($getStoreName as $str) {
                                    $storeName = $str['name'];
                                    if (!isset($itemsByStore[$storeName])) {
                                        $itemsByStore[$storeName] = [];
                                    }
                                    $itemsByStore[$storeName][] = [
                                        'product_title' => $rows['product_title'],
                                        'product_price' => $rows['product_price'],
                                        'size' => $row['size'],
                                        'color' => $row['color']
                                    ];
                                }
                            }
                        }

                        foreach ($itemsByStore as $storeName => $items) {
                            echo "<h2 class='text-xl font-bold mb-4'>$storeName</h2>";
                            foreach ($items as $item) {
                    ?>
                                <div class="flex items-center justify-between border-b pb-4 mb-4">
                                    <div class="flex items-center">
                                        <div>
                                            <img src="https://via.placeholder.com/80" alt="Product 1" class="w-20 h-20 object-cover rounded-lg">
                                        </div>
                                        <div class="ml-4">
                                            <h3 class="font-semibold"><?php echo $item['product_title']; ?></h3>
                                            <p class="text-gray-500">Size: <?php echo $item['size']; ?></p>
                                            <p class="text-gray-500">Color: <?php echo $item['color']; ?></p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-semibold"><?php echo number_format($item['product_price']); ?></p>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    } else {
                        echo "<h2>No product found in your cart</h2>";
                    }
                    ?>
                    <div class="flex justify-between">
                        <p class="text-lg font-semibold">Total: <?php echo number_format($total + 100); ?></p>
                    </div>
                </div>

                <div class="height-controller">
                    <div class="w-[22rem] bg-white p-4 rounded-lg shadow mt-4 md:mt-0">
                        <h2 class="text-2xl font-bold mb-4">Calculated Shipping</h2>
                           <a href="checkout.php?p=<?php echo md5('cart') ?>"> <button name="checkout" class="w-full bg-blue-500 text-white p-2 rounded uppercase">Proceed To Checkout</button></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
