<?php
include("includes/includes-header.php");
require_once('functions/post-controller.php');
$msg = "";
if (isset($_POST['submit'])) {
    $dataToInsert = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'status' => 'OFF',
        'area' => $_POST['area'],
    ];
    $insertNewProduct = new posts_Controller;
    $checkEmail = $insertNewProduct->checkDataExistOrNot('deliverymens', 'email', $_POST['email']);
    $checkName = $insertNewProduct->checkDataExistOrNot('deliverymens', 'name', $_POST['name']);
    if (is_array($checkEmail) && count($checkEmail) > 0) {
        $msg = '<div class="alert alert-error">
        Email already in use.
    </div>';
    } elseif (is_array($checkName) && count($checkName) > 0) {
        $msg = '<div class="alert alert-error">
        Please try different name.
    </div>';
    } else {
        $execute = $insertNewProduct->insertData($dataToInsert, 'deliverymens');

        if ($execute) {
            $msg = '<div class="alert alert-success mb-5">
        Delivery man added
    </div>';
        } else {
            $msg = '<div class="alert alert-error">
        Something went wrong. Try again later.
    </div>';
        }
    }
}
?>


<main class="cd-main-content">
    <?php include("includes/includes-sidebar.php") ?>


    <div class="cd-content-wrapper">
        <div class="text-component text-center">
            <?php echo $msg; ?>
            <div class="">

                <form action="add-new-delivery-men.php" method="post">


                    <div class="flex justify-between ">
                        <div class="bg-gray-100 shadow-md  p-3 ">
                            <div>
                                <input name="name" class="w-[70rem] p-3 rounded-md" placeholder="Delivery men name" type="text">
                            </div>
                            <div class="mt-4">
                                <input name="email" class="w-[70rem] p-3 rounded-md" placeholder="Email" type="text">
                            </div>
                            <div class="mt-4">
                                <input name="area" class="w-[70rem] p-3 rounded-md" placeholder="Area" type="TEXT">
                            </div>
                        </div>
                        <div class="w-[30rem] bg-gray-100 shadow-md p-3">
                            <div class="mt-4">
                                <input class="w-full border border-gray-300 p-3 rounded-md" placeholder="photo" type="file">
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