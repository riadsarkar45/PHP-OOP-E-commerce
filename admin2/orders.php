<?php
require_once('functions/post-controller.php');
include('includes/session.php');
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['store_id'];
}
$fetchOrder = new posts_Controller;
$orders = $fetchOrder->fetchData('orders', 'store_id = ' . $login_user_id, 'id', 'desc');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard with Scrollable Collapsible Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            height: calc(100vh - 4rem);
            /* Full height minus the header height */
        }
    </style>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="flex">
        <!-- Sidebar -->
        <?php require_once("includes/includes-sidebar.php") ?>

        <!-- Main content -->
        <div class="flex-1 ml-64 p-6">
            <!-- Header -->
            <?php //require_once("includes/includes-header.php") ?>



            <!-- Latest orders -->
            <?php
            if (isset($_SESSION['message'])) {
                echo '<div class="alert">' . $_SESSION['message'] . '</div>';
                unset($_SESSION['message']); // Clear the message after displaying it
            }
            ?>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($orders) {
                            foreach ($orders as $rows) {
                                $status = 'Pending';
                                $cls = 'bg-yellow-500 p-[1px] text-yellow-800 rounded bg-opacity-20 border-yellow-500 border border-yellow-500 shadow';
                                if ($rows['status'] === 'ON') {
                                    $status = 'Confirmed';
                                    $cls = 'bg-green-500 p-[1px] text-green-800 rounded bg-opacity-20 border-green-500 border border-green-500 shadow';
                                }
                                $getProducts = $fetchOrder->fetchData('products', 'product_id = ' . $rows['product_id'], 'product_id', 'desc');
                                foreach ($getProducts as $prod) {
                                    $totals = $prod['product_price'] * $prod['product_qty'];
                        ?>
                                    <tr class="bg-white border-b dark:border-gray-300 text-black shadow">
                                        <th scope="row" class="px-2 py-4 font-medium  whitespace-nowrap text-black">
                                            <?php echo $prod['product_title'] ?>
                                        </th>
                                        <td class="px-2 py-4">
                                            <span><img class="w-[3rem] h-[3rem]" src="images/<?php echo $prod['image'] ?>" alt=""></span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $prod['product_category'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $prod['product_qty'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo number_format($totals); ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="<?php echo $cls; ?>"><?php echo $status; ?></span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="grid grid-cols-2 gap-1">
                                                <a href="crud/crud.php?update=<?php echo $prod['product_id'] ?>&type=ON">
                                                    <span class="bg-green-500 p-[1px] text-green-800 rounded bg-opacity-20 border-green-500 border border-green-500 shadow">Confirm</span>
                                                </a>
                                                <a href="crud/crud.php?update=<?php echo $prod['product_id'] ?>&type=OFF"><span class="bg-yellow-500 p-[1px] text-yellow-800 rounded bg-opacity-20 border-yellow-500 border border-yellow-500 shadow">Cancel</span></a>
                                                <a href="crud/crud.php?delete=<?php echo $prod['product_id'] ?>"><span class="bg-red-500 p-[1px] text-red-800 rounded bg-opacity-20 border-red-500 border border-red-500 shadow">Delete</span></a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }
                            }
                        } else { ?>
                            <h2>No order at this time</h2>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>