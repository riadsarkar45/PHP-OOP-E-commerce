<?php
include("includes/includes-header.php");
require_once('functions/post-controller.php');
$fetchData = new posts_Controller;
$fetchData = $fetchData->fetchData('deliverymens', NULL, 'id', 'desc')
?>


<main class="cd-main-content">
    <?php include("includes/includes-sidebar.php") ?>


    <div class="cd-content-wrapper">

        <table class="table bg-gray-50 p-2 shadow-sm" id="userTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Added By</th>
                    <th scope="col">Status</th>
                    <th scope="col">Area</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($fetchData) {
                    $srNo = 0;
                    foreach ($fetchData as $rows) {
                        $btn = 'bg-red-300 border-red-500 p-1 text-sm rounded-md';
                        $sts = 'Pending';
                        if ($rows['status'] === 'ON') {
                            $btn = 'bg-green-300 border-green-500 p-1 text-sm rounded-md';
                            $sts = 'Approved';
                        }
                        $srNo++;
                ?>
                        <tr>
                            <th scope="row"><?php echo $srNo ?></th>
                            <td><?php echo $rows['name'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td>Photo</td>
                            <td>Riad Sarkar</td>
                            <td>
                                <button class="<?php echo $btn ?>"><?php echo $sts ?></button>
                            </td>
                            <td><?php echo $rows['area'] ?></td>
                            <td><button class="bg-red-300 border-red-500 p-1 rounded-md">Delete</button></td>
                        </tr>
                    <?php }
                } else { ?>
                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Alert!</span> No Users found.
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