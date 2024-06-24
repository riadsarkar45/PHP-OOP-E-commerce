<?php

include('../includes/session.php');
require_once('../../public/functions/client-controller.php');
$crud = new client_controller('../includes/database_connection.php');
if (isset($_GET['update'])) {
    $dataToUpdate = [
        'status' => $_GET['type'],
    ];
    $update = $crud->editData($dataToUpdate, 'orders', 'product_id = ' . $_GET['update']);
    $_SESSION['message'] = $update ? '<div class="bg-green-500 p-2 text-green-800 rounded bg-opacity-20 border-green-500 border border-green-500 mb-2">
                        <h2>Update Successful.</h2>
                    </div>' : '<div class="bg-red-500 p-2 text-red-800 rounded bg-opacity-20 border-red-500 border border-red-500 mb-2">
                            <h2>Something went wrong. Try again later.</h2>
                    </div>';
    header('location: ../orders.php');
    exit();
}

if (isset($_GET['delete'])) {
    $delete = $crud->deleteData('product_id = '.  $_GET['delete'], 'orders');
    $_SESSION['message'] = $delete ? '<div class="bg-green-500 p-2 text-green-800 rounded bg-opacity-20 border-green-500 border border-green-500 mb-2">
                        <h2>Delete Successful.</h2>
                    </div>' : '<div class="bg-red-500 p-2 text-red-800 rounded bg-opacity-20 border-red-500 border border-red-500 mb-2">
                            <h2>Something went wrong. Try again later.</h2>
                    </div>';
    header('location: ../orders.php');
    exit();
}
