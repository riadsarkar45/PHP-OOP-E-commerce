<?php
require_once('../admin2/includes/session.php');
$msg = '';
if (isset($_POST['login'])) {
    require_once('../admin2/functions/post-controller.php');
    require_once('../admin2/functions/user-controller.php');
    $userData = new User_controller;
    $postsControl = new posts_Controller;
    $userEmail = $_POST['email'];
    $checkUserFoundOrNot = $postsControl->checkDataExistOrNot('users', 'userEmail', $userEmail);
    $userData->setUserEmail($_POST['email']);
    $userData->setUserPassword($_POST['password']);
    if (is_array($checkUserFoundOrNot) && count($checkUserFoundOrNot) > 0) {
        if ($checkUserFoundOrNot['status'] === 'OFF') {
            $msg = 'Your account is unApproved please contact to the admin';
        } else {
            if (md5($_POST['password']) === $checkUserFoundOrNot['password']) {
                $_SESSION['userData'][$checkUserFoundOrNot['id']] = [
                    'id' => $checkUserFoundOrNot['id'],
                    'username' => $checkUserFoundOrNot['userName'],
                    'email' => $checkUserFoundOrNot['userEmail'],
                    'status' => $checkUserFoundOrNot['status'],
                    'store_id' => $checkUserFoundOrNot['store_id'],
                ];


                header('location: ../index.php');
            } else {
                $msg = 'Incorrect Password';
            }
        }
    } else {
        $msg = 'No user found';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login!!</title>
</head>

<body class="bg-gray-100 ">
    <!-- header section start -->
    <?php require_once('includes/include-header.php') ?>
    <!-- header section end -->
    <div class="flex items-center justify-center mt-8">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <?php echo $msg; ?>
            <form class="space-y-6" action="login.php" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Phone Number or Email*</label>
                    <input type="text" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Please enter your Phone Number or Email">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password*</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Please enter your password">
                </div>
                <div class="text-right">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Reset Your Password</a>
                </div>
                <div>
                    <button name="login" type="submit" class="w-full py-2 px-4 bg-orange-500 text-white font-medium rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Login</button>
                </div>
                <div class="flex items-center justify-center space-x-4 mt-6">
                    <span class="text-gray-500">Or, login with</span>
                </div>
                <div class="flex space-x-4">
                    <button type="button" class="flex-1 py-2 px-4 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </button>
                    <button type="button" class="flex-1 py-2 px-4 bg-red-500 text-white font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <i class="fab fa-google"></i> Google
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>