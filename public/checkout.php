<?php
require_once('../admin2/includes/session.php');
require_once('functions/client-controller.php');
$clientController = new client_controller('../admin2/includes/database_connection.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['id'];
}
$cartItems = [];
$total = 0;
if (isset($_GET['p'])) {
    $cartItems = $clientController->fetchData('cart', 'user_id = ' . $login_user_id, null, null, null);
} else {
    if (isset($_GET['pid'])) {
        $cartItems = $clientController->fetchData('products', 'product_id = ' . $_GET['pid'], null, null, null);
    }
}


$orderMsg = "";
if (isset($_POST['order'])) {
    foreach ($cartItems as $cart) {
        $dataToInsert = [
            'user_id' => $login_user_id,
            'date' => time(),
            'product_id' => $cart['product_id'],
            'qty' => $cart['product_id'],
            'store_id' => $cart['store_id'],
            'status' => 'OFF',
        ];
        $insertData = $clientController->insertData($dataToInsert, 'orders');
    }

    if ($insertData) {
        $orderMsg =  '<div class="bg-green-500 p-2 text-green-800 rounded bg-opacity-20 border-green-500 border border-green-500">
                        <h2>Order Placed</h2>
                    </div>';
    } else {
        $orderMsg =  '<div class="bg-red-500 p-2 text-red-800 rounded bg-opacity-20 border-red-500 border border-red-500">
                            <h2>Something went wrong. Try again later.</h2>
                    </div>';
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

                <div class=" w-[45rem] mt-2 mb-6 m-auto rounded mt-3">
                    <?php
                    if ($cartItems) {
                        $itemsByStore = [];

                        foreach ($cartItems as $cart) {
                            $carts = $clientController->fetchData('products', 'product_id = ' . $cart['product_id'], null, null, null);  // Change 'product_id' to 'id'
                            foreach ($carts as $rows) {
                                $pro = $rows['product_price'];
                                $total += $pro;
                                $getStoreName = $clientController->fetchData('store_name', 'id = ' . $rows['store_id'], null, null, null);
                                foreach ($getStoreName as $str) {
                                    $storeName = $str['name'];
                                    if (!isset($itemsByStore[$storeName])) {
                                        $itemsByStore[$storeName] = [];
                                    }
                                    $item = [
                                        'product_title' => $rows['product_title'],
                                        'product_price' => $rows['product_price'],
                                    ];

                                    if (isset($cart['size'])) {
                                        $item['size'] = $cart['size'];
                                    }

                                    if (isset($cart['color'])) {
                                        $item['color'] = $cart['color'];
                                    }

                                    $itemsByStore[$storeName][] = $item;
                                }
                            }
                        }

                        foreach ($itemsByStore as $storeName => $items) {
                    ?>
                            <div class="bg-white mt-2 rounded">
                                <h2 class="border-b p-2 font-bold text-xl"><?php echo $storeName; ?></h2>
                                <?php
                                foreach ($items as $item) {
                                ?>
                                    <div class="mt-1 border-b flex items-center justify-between p-2">
                                        <div class="">
                                            <img class="h-[5rem] w-[5rem]" src="https://i.ibb.co/0ZZFhPN/ddddddddddddddddddddd.jpg" alt="">
                                        </div>
                                        <div>
                                            <?php echo $item['product_title']; ?> <!-- Use $item instead of $rows -->
                                        </div>
                                        <div>
                                            Qty: 7
                                        </div>
                                        <div>
                                            Price: <?php echo number_format($item['product_price']); ?> <!-- Use $item instead of $rows -->
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php
                        }
                    } else { ?>
                        <h2>No product selected.</h2>
                    <?php } ?>
                </div>

            </div>

            <div class="height controller">
                <div class="bg-white w-[23rem] mt-8 p-3 shadow-sm rounded">
                    <h2>Discount and Payment</h2>

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
                        <h2><?php echo $total + 120; ?></h2>
                    </div>

                    <div class="border mt-3 rounded flex gap-1 justify-between p-3 w-full">
                        <input type="text" class="p-1 w-full hover:border-0" placeholder="Enter Voucher Code">
                        <button class="bg-blue-200 p-2 border rounded">Apply</button>
                    </div>

                    <?php
                    if (isset($_GET['pid'])) {

                    ?>
                        <form action="checkout.php?pid=<?php echo $_GET['pid']; ?>&pn=<?php echo $_GET['pn']; ?>" method="post" enctype="multipart/form-data">
                            <input name="ordered_items" class="p-2 w-full border rounded mt-3" value="<?php echo htmlspecialchars(json_encode($cartItems)); ?>" type="hidden">
                            <div>
                                <button name="order" class="bg-blue-200 p-2 border rounded w-full mt-5">Place Order (<?php echo count($cartItems); ?>)</button>
                            </div>
                        </form>
                    <?php } elseif (isset($_GET['p'])) { ?>
                        <form action="checkout.php?p=<?php echo $_GET['p']; ?>" method="post" enctype="multipart/form-data">
                            <input name="ordered_items" class="p-2 w-full border rounded mt-3" value="<?php echo htmlspecialchars(json_encode($cartItems)); ?>" type="hidden">
                            <div>
                                <button name="order" class="bg-blue-200 p-2 border rounded w-full mt-5">Place Order (<?php echo count($cartItems); ?>)</button>
                            </div>
                        </form>
                    <?php } ?>
                    <div class="mt-3">
                        <?php echo $orderMsg; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>