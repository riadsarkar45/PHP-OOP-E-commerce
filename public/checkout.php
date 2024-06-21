<?php
require_once('functions/client-controller.php');
$clientController = new client_controller('../admin2/includes/database_connection.php');

$fetchProd = [];
$cartItems = [];
$total = 0; // Initialize total cost
$itemsByStore = []; // Initialize an array to group items by store

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cartItems'])) {
    $cartItems = json_decode($_POST['cartItems'], true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "Failed to decode JSON";
        $cartItems = [];
    }
} else {
    if (isset($_GET['pid'])) {
        $fetchProd = $clientController->fetchData('products', 'id = ' . intval($_GET['pid']), null, null, null);
    }
}

if (isset($_POST['order'])) {
    $cartItem = json_decode($_POST['ordered_items'], true);
    foreach ($cartItem as $cart) {
        $dataToInsert = [
            'user_id' => $cart['user_id'],
            'date' => $cart['date'],
            'product_id' => $cart['product_id'],
            'qty' => $cart['product_id'],
            'store_id' => $cart['store_id'],
        ];
        $insertData = $clientController->insertData($dataToInsert, 'orders');
    }

    if ($insertData) {
        echo "Order Confirmed";
    } else {
        echo "Head shot";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div>
        <?php require_once("includes/include-header.php") ?>
        <div class="w-[70rem] m-auto flex gap-3">
            <div class="height controller">
                <div class="bg-white w-[45rem] mt-8 p-3 shadow-sm rounded">
                    <h2>Deliver to: Riad Sarkar</h2>
                    <h2>HOME 1744972947 Gurudashpur,Thana, Hatgurudaspur, Natore, Rajshahi Change</h2>
                    <h2>Bill to the same address Edit</h2>
                    <h2>Email to sarkarriad92@gimail.com Edit</h2>
                </div>

                <div class="bg-white w-[45rem] mt-8 p-3 shadow-sm rounded-t border-b mt-3">
                    <div class="mt-1">
                        <?php if ($fetchProd) : ?>
                            <?php foreach ($fetchProd as $rows) : ?>
                                <h2><?php echo $rows['store_id']; ?> // It will replace with store name</h2>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-1">
                                        <img class="w-[3rem] h-[3rem] mt-5" src="https://i.ibb.co/0ZZFhPN/ddddddddddddddddddddd.jpg" alt="">
                                        <h2><?php echo $rows['product_title']; ?></h2>
                                    </div>
                                    <div>
                                        <h2>Qty : 1</h2>
                                    </div>
                                    <div>
                                        <h2>৳ <?php echo number_format($rows['product_price']); ?></h2>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        <?php elseif ($cartItems) : ?>
                            <?php
                            // Group cart items by store name
                            foreach ($cartItems as $item) {
                                $getProductDetail = $clientController->fetchData('products', 'id = ' . $item['product_id'], null, null, null);
                                foreach ($getProductDetail as $rows) {
                                    $pro = $rows['product_price'];
                                    $total += $pro;

                                    $getStoreName = $clientController->fetchData('store_name', 'id = ' . $rows['store_id'], null, null, null);
                                    foreach ($getStoreName as $str) {
                                        $storeName = $str['name'];
                                        if (!isset($itemsByStore[$storeName])) {
                                            $itemsByStore[$storeName] = [];
                                        }
                                        $itemsByStore[$storeName][] = [
                                            'product_title' => $rows['product_title'],
                                            'product_price' => $rows['product_price'],
                                            'size' => $item['size'],
                                            'color' => $item['color']
                                        ];
                                    }
                                }
                            }

                            // Display items grouped by store
                            foreach ($itemsByStore as $storeName => $items) {
                                echo "<h2 class='border-b-2 p-2 border-gray-400 text-bold text-xl'>$storeName</h2>";
                                foreach ($items as $item) {
                            ?>
                                    <div class="flex  justify-between items-center border-b p-2">
                                        <div class="flex items-center gap-1">
                                            <img class="w-[3rem] h-[3rem] mt-5" src="https://i.ibb.co/0ZZFhPN/ddddddddddddddddddddd.jpg" alt="">
                                            <h2><?php echo $item['product_title']; ?></h2>
                                        </div>
                                        <div>
                                            <h2>Qty : 1</h2>
                                        </div>
                                        <div>
                                            <h2>৳ <?php echo number_format($item['product_price']); ?></h2>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        <?php else : ?>
                            <h2>No product selected</h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="height controller">
                <div class="bg-white w-[23rem] mt-8 p-3 shadow-sm rounded">
                    <h2>Discount and Payment</h2>
                    <?php if ($fetchProd) { ?>
                        <?php foreach ($fetchProd as $row) : ?>
                            <div class="flex justify-between mt-3">
                                <h2>Daraz Voucher Code</h2>
                                <h2>Not Applicable</h2>
                            </div>
                            <div class="flex justify-between mt-3">
                                <h2>Subtotal (<?php echo count($fetchProd) ?>) items</h2>
                                <h2><?php echo number_format($rows['product_price'] + 120); ?></h2>
                            </div>
                            <div class="flex justify-between mt-3">
                                <h2>Shipping Fee</h2>
                                <h2>120</h2>
                            </div>
                        <?php endforeach; ?>
                    <?php } else { ?>
                        <div class="flex justify-between mt-3">
                            <h2>Daraz Voucher Code</h2>
                            <h2>Not Applicable</h2>
                        </div>
                        <div class="flex justify-between mt-3">
                            <h2>Shipping Fee</h2>
                            <h2>120</h2>
                        </div>

                        <div class="flex justify-between mt-3">
                            <h2>Subtotal (<?php echo count($cartItems) ?>) items</h2>
                            <h2><?php echo number_format($total + 120); ?></h2>
                        </div>
                    <?php } ?>

                    <div class="border mt-3 rounded flex gap-1 justify-between p-3 w-full">
                        <input type="text" class="p-1 w-full hover:border-0" placeholder="Enter Voucher Code">
                        <button class="bg-blue-200 p-2 border rounded">Apply</button>
                    </div>

                    <form action="checkout.php" method="post" enctype="multipart/form-data">
                        <input name="ordered_items" class="p-2 w-full border rounded mt-3" value="<?php echo htmlspecialchars(json_encode($cartItems)) ?>" type="text">
                        <div>
                            <button name="order" class="bg-blue-200 p-2 border rounded w-full mt-5">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>