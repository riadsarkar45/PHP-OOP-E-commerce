<?php
include("includes/includes-header.php");
require_once('functions/post-controller.php');
$msg = "";
if (isset($_POST['submit'])) {
    $imagePaths = [];
    if (!empty($_FILES['banner']['name'][0])) {
            $imageTmpName = $_FILES['banner']['tmp_name'];
            $imageDestination = "../images/TEST/" . $imageName;
            move_uploaded_file($imageTmpName, $imageDestination);
            $imagePaths[] = $imageDestination;
    }
    $dataToInsert = [
        'date' => date('n/j/Y'),
        'image' => $imageTmpName,
    ];
    $insertNewProduct = new posts_Controller;
    $execute = $insertNewProduct->insertData($dataToInsert, 'banner');
}
?>


<main class="cd-main-content">
    <?php include("includes/includes-sidebar.php"); ?>


    <div class="cd-content-wrapper">
        <div class="text-component text-center">
            <?php echo $msg; ?>
            <div class="">

                <form action="add-new-banner.php" method="post" enctype="multipart/form-data">


                    <div class="flex justify-between ">
                        <div class="bg-gray-100 shadow-md  p-3 ">
                            <div>
                                <textarea name="desc" placeholder="Banner title (optional)" class="w-[70rem] p-3 rounded-md h-[29rem]" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="w-[30rem] bg-gray-100 shadow-md p-3">
                            <div class="mt-4">
                                <h2 class="text-left text-small">Banner 1</h2>
                                <input name="banner[]" multiple class="w-full border border-gray-300 p-3 rounded-md" placeholder="photo" type="file">
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