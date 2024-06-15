<?php
session_start();
$msg = "";
if (isset($_POST['login'])) {
    require_once('functions/user-controller.php');
    require_once('functions/post-controller.php');
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


                header('location: index.php');
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

    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <div class="w-[30%] flex m-auto items-center justify-center h-[100vh]">

            <div class="bg-gray-50 p-2 shadow-sm">
                <?php echo $msg; ?>
                <input name="email" class="p-2 w-[30rem] border border-gray-300 rounded-sm" placeholder="Email" type="text">
                <div>
                    <input name="password" class="p-2 w-[30rem] border border-gray-300 mt-4 rounded-sm" placeholder="Password" type="text">
                </div>
                <div>
                    <button name="login" class="p-2 w-[30rem] bg-blue-300 text-white border border-gray-300 mt-4 rounded-sm">Login</button>
                </div>
            </div>

        </div>
    </form>
</body>

</html>