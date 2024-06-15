<?php
include("includes/includes-header.php");
require_once('functions/post-controller.php');
$msg = "";
if (isset($_POST['submit'])) {
    $dataToInsert = [
        'product_title' => $_POST['product_title'],
        'product_qty' => $_POST['product_qty'],
        'promo_code' => $_POST['discount_code'],
        'product_category' => $_POST['product_category'],
        'discount' => $_POST['discount'],
        'product_price' => $_POST['price'],
        'product_description' => $_POST['product_description'],
    ];
    $insertNewProduct = new posts_Controller;
    $table = 'products';
    $execute = $insertNewProduct->insertData($dataToInsert, 'products');

    if ($execute) {
        $msg = '<div class="alert alert-success mb-5">
        Product Inserted
    </div>';
    } else {
        $msg = '<div class="alert alert-error">
        Something went wrong. Try again later.
    </div>';
    }
}
?>


<main class="cd-main-content">
    <?php include("includes/includes-sidebar.php") ?>


    <div class="cd-content-wrapper">
        <div class="text-component text-center">
        <?php echo $msg; ?>
            <div class="">

                <form action="add-new-post.php" method="post">
                    

                    <div class="flex justify-between ">
                        <div class="bg-gray-100 shadow-md  p-3 ">
                            <div>
                                <input name="product_title" class="w-[70rem] p-3 rounded-md" placeholder="Product Name" type="text">
                            </div>
                            <div class="mt-4">
                                <input name="price" class="w-[70rem] p-3 rounded-md" placeholder="Product Price" type="text">
                            </div>
                            <div class="mt-4">
                                <input name="discount" class="w-[70rem] p-3 rounded-md" placeholder="Product Discount" type="number">
                            </div>
                            <div class="mt-4">
                                <input name="discount_code" class="w-[70rem] p-3 rounded-md" placeholder="Product Discount Code" type="text">
                            </div>
                            <div class="mt-4">
                                <textarea name="product_description" placeholder="Product Desc" class="w-[70rem] h-[20rem] p-3 rounded-md" name=""></textarea>
                            </div>

                        </div>
                        <div class="w-[30rem] bg-gray-100 shadow-md p-3">
                            <div class="mt-4">
                                <input name="product_category" class="w-full border border-gray-300 p-3 rounded-md" placeholder="Product Category" type="text">
                            </div>

                            <div class="mt-4">
                                <input class="w-full border border-gray-300 p-3 rounded-md" placeholder="Product Size" type="text">
                            </div>
                            <div class="mt-4">
                                <input class="w-full border border-gray-300 p-3 rounded-md" placeholder="Product Size" type="file">
                            </div>
                            <div class="mt-4">
                                <input class="w-full border border-gray-300 p-3 rounded-md" placeholder="Product Size" type="color">
                            </div>
                            <div class="mt-4">
                                <input name="product_qty" class="w-full border border-gray-300 p-3 rounded-md" placeholder="Product Qty" type="text">
                            </div>
                            <div class="mt-4">
                                <button type="submit" name="submit" class="bg-blue-700 p-3 text-white w-full rounded-md">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</main> <!-- .cd-main-content -->

</body>

</html>

</body>

</html>