<?php
require_once('functions/client-controller.php');
$clientController = new client_controller('../admin2/includes/database_connection.php');
$fetchProd = $clientController->fetchData('products', 'id = ' . $_GET['pid'], null, null)
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

                    <h2>
                        HOME
                        1744972947
                        Gurudashpur,Thana, Hatgurudaspur, Natore, Rajshahi Change
                    </h2>

                    <h2>
                        Bill to the same address
                        Edit
                    </h2>
                    <h2>
                        Email to
                        sarkarriad92@gimail.com
                        Edit
                    </h2>
                </div>

                <div class="bg-white w-[45rem] mt-8 p-3 shadow-sm rounded-t border-b mt-3">
                    <div class="mt-1">
                        <?php
                        if ($fetchProd) {
                            foreach ($fetchProd as $rows) {
                        ?>
                                <h2><?php echo $rows['store_id']; ?> //It will replace with store name</h2>

                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-1">
                                        <img class="w-[3rem] h-[3rem] mt-5" src="https://i.ibb.co/0ZZFhPN/ddddddddddddddddddddd.jpg" alt="">
                                        <h2>
                                            <?php echo $rows['product_title']; ?>
                                        </h2>
                                    </div>
                                    <div>
                                        <h2>Qty : 1</h2>

                                    </div>
                                    <div>
                                        <h2>৳ <?php echo number_format($rows['product_price']); ?></h2>
                                    </div>
                                </div>
                            <?php }
                        } else { ?>
                            <h2>No product selected</h2>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="height controller">
                <div class="bg-white w-[23rem] mt-8 p-3 shadow-sm rounded">
                    <h2>Discount and Payment</h2>
                    <?php
                    if ($fetchProd) {
                        foreach($fetchProd as $row){
                    ?>
                        <div class="flex justify-between mt-3">
                            <h2>Daraz Voucher Code</h2>
                            <h2>Not Applicable</h2>
                        </div>
                        <div class="flex justify-between mt-3">
                            <h2>Subtotal (1) items</h2>
                            <h2><?php echo number_format($rows['product_price']); ?></h2>
                        </div>
                        <div class="flex justify-between mt-3">
                            <h2>Shipping Fee</h2>
                            <h2>120</h2>
                        </div>
                    <?php } } else { ?>

                        <h2>Something Went Wrong</h2>

                    <?php } ?>

                    <div class="border mt-3 rounded flex gap-1 justify-between p-3 w-full">
                        <input type="text" class="p-1 w-full hover:border-0" placeholder="Enter Voucher Code">
                        <button class="bg-blue-200 p-2 border rounded">Apply</button>
                    </div>

                    <div>
                        <button class="bg-blue-200 p-2 border rounded w-full mt-5">Place Order</button>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>