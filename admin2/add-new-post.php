<?php
require_once('functions/post-controller.php');
include('includes/session.php');
$insert = new posts_Controller;

if (isset($_POST['insert'])) {
    $imagePaths = [];

    if (!empty($_FILES['image']['name'])) {
        $imageName = uniqid() . '_' . $_FILES['image']['name'];
        $imageDestination = "./images/" . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imageDestination)) {
            $imagePaths[] = $imageDestination;
        } else {
        }
    }

    $dataToInsert = [
        'date' => $_POST['date'],
        'product_title' => $_POST['product_name'],
        'product_qty' => $_POST['product_qty'],
        'promo_code' => $_POST['promo_code'],
        'product_category' => $_POST['category'],
        'discount' => $_POST['discount'],
        'product_price' => $_POST['price'],
        'product_description' => $_POST['product_desc'],
        'store_id' => 55,
        'image' => isset($imageName) ? $imageName : null,
        'meta_desc' => $_POST['meta_desc'],
        'brand_name' => $_POST['brand_name'],
    ];

    $insertProduct = $insert->insertData($dataToInsert, 'products');

    if ($insertProduct) {
    } else {
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="flex">
        <!-- Sidebar -->
        <?php require_once("includes/includes-sidebar.php") ?>

        <!-- Main content -->
        <div class="flex-1 ml-64 p-6">
            <!-- Header -->
            <?php require_once("includes/includes-header.php") ?>

            <!-- Form -->
            <div class="p-2 mt-5">
                <form action="add-new-post1.php" method="post" enctype="multipart/form-data">
                    <div class="flex gap-3">
                        <div>
                            <div class="bg-white w-[38rem] p-2 rounded shadow">
                                <div>
                                    <h2>Brand Info</h2>
                                    <input type="text" name="brand_name" class="w-full border p-2 rounded" placeholder="Brand Name">
                                </div>
                                <div class="flex justify-between gap-2 mt-2">
                                    <div>
                                        <h2>Category</h2>
                                        <select name="category" class="w-full border p-2 rounded">
                                            <option>Select Category</option>
                                            <option value="Electronic">Electronic</option>
                                            <option value="Beauty">Beauty</option>
                                            <option value="Clothing">Clothing</option>
                                            <option value="Mens">Mens</option>
                                        </select>
                                    </div>
                                    <div>
                                        <h2>Price</h2>
                                        <input type="text" name="price" class="w-full border p-2 rounded" placeholder="Price">
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <h2>Product Name</h2>
                                    <input type="text" name="product_name" class="w-full border p-2 rounded" placeholder="Product Name">
                                </div>
                                <div class="mt-2">
                                    <h2>Product Description</h2>
                                    <textarea id="tiny" name="product_desc" class="w-full border p-2 rounded"></textarea>
                                </div>
                            </div>

                            <div class="bg-white p-2 rounded shadow mt-3">
                                <h2>Meta Description</h2>
                                <textarea name="meta_desc" class="w-full border p-2 rounded"></textarea>
                            </div>
                        </div>

                        <div class="w-[20rem] ">
                            <div class="bg-white w-[20rem] rounded p-2 shadow">
                                <div>
                                    <h2>Publish Date</h2>
                                    <input type="date" name="date" class="w-full border p-2 rounded" placeholder="Publish Date">
                                </div>
                            </div>
                            <div class="bg-white w-[20rem] mt-3 rounded p-2 shadow">
                                <div>
                                    <h2>Promo Code</h2>
                                    <input type="text" name="promo_code" class="w-full border p-2 rounded" placeholder="Promo Code">
                                </div>
                                <div class="mt-3">
                                    <h2>Product Qty</h2>
                                    <input type="text" name="product_qty" class="w-full border p-2 rounded" placeholder="Product Qty">
                                </div>
                                <div class="mt-3">
                                    <h2>Discount</h2>
                                    <input type="text" name="discount" class="w-full border p-2 rounded" placeholder="Discount">
                                </div>
                            </div>

                            <div class="bg-white shadow rounded w-[20rem] flex justify-center items-center mt-3 p-2">
                                <div>
                                    <input type="file" name="image" id="fileInput" class="w-full border p-2 rounded">
                                    <img id="selectedImage" class="hidden w-[24rem] h-full" />
                                </div>
                            </div>

                            <div class="bg-white shadow rounded w-[20rem] h-[5rem] flex justify-center items-center mt-3 p-2">
                                <div>
                                    <button type="submit" name="insert" class="bg-green-500 p-2 text-green-800 rounded bg-opacity-20 border-green-500 border">Insert</button>
                                    <button type="button" class="bg-red-500 p-2 text-red-800 rounded bg-opacity-20 border-red-500 border">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tiny.cloud/1/y8sz8ge19bhtof5vdb36onjthaycl1d9q1srg96rohuworiy/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#tiny',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });

        const fileInput = document.getElementById('fileInput');
        const selectedImage = document.getElementById('selectedImage');

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    selectedImage.src = e.target.result;
                    selectedImage.classList.remove('hidden');
                    fileInput.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>