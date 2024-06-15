<?php
include("includes/includes-header.php");
include("includes/session.php");
require_once('functions/post-controller.php');
$fetchData = new posts_Controller;
foreach ($_SESSION['userData'] as $key => $value) {
    $login_user_id = $value['store_id'];
}
$fetchData = $fetchData->fetchData('products',  'store_id = ' . $login_user_id, 'id', 'desc');

?>


<main class="cd-main-content">
    <?php include("includes/includes-sidebar.php") ?>


    <div class="cd-content-wrapper">

        <table class="table bg-gray-100 p-2 shadow-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Size</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Progress</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($fetchData) {
                    foreach ($fetchData as $rows) {


                ?>
                        <tr>
                            <th scope="row">1</th>
                            <td>Riad Sarkar</td>
                            <td><?php echo $rows['product_title'] ?></td>
                            <td>Image 1</td>
                            <td>XXL</td>
                            <td><?php echo $rows['product_price'] ?></td>
                            <td><?php echo $rows['product_qty'] ?></td>
                            <td>
                                <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Alert!</span> No product found.
                        </div>
                    </div>

                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
</main> <!-- .cd-main-content -->
<script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="assets/js/menu-aim.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>

</body>

</html>