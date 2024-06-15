<?php
include("includes/includes-header.php");
require_once('functions/post-controller.php');
$fetchData = new posts_Controller;
$fetchData = $fetchData->fetchData('users', NULL, 'id', 'desc')
?>


<main class="cd-main-content">
    <?php include("includes/includes-sidebar.php") ?>


    <div class="cd-content-wrapper">
        <input type="text" id="searchInput" placeholder="Search...">

        <table class="table bg-gray-100 p-2 shadow-sm" id="userTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($fetchData) {
                    $srNo = 0;
                    foreach ($fetchData as $rows) {

                        $srNo++;
                ?>
                        <tr>
                            <th scope="row"><?php echo $srNo ?></th>
                            <td><?php echo $rows['userName'] ?></td>
                            <td><?php echo $rows['userEmail'] ?></td>
                            <td><?php echo $rows['date'] ?></td>
                            <td><?php echo $rows['role'] ?></td>
                            <td>Delete</td>
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
<script>
    // Get the input field and table
    const input = document.getElementById('searchInput');
    const table = document.getElementById('userTable');
    const rows = table.getElementsByTagName('tr');

    // Add event listener to input field
    input.addEventListener('input', function() {
        const searchTerm = input.value.toLowerCase();

        // Loop through all table rows, hide those that don't match the search query
        for (let i = 0; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            let found = false;
            for (let j = 0; j < cells.length; j++) {
                const cellText = cells[j].textContent || cells[j].innerText;
                if (cellText.toLowerCase().indexOf(searchTerm) > -1) {
                    found = true;
                    break;
                }
            }
            if (found) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = '';
            }
        }
    });
</script>

</body>

</html>

</body>

</html>