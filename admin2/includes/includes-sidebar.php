<!-- <nav class="cd-side-nav js-cd-side-nav">
  <ul class="cd-side__list js-cd-side__list">
  <li class="cd-side__label text-3xl"><a href="index.php"><span>Home</span></a></li>
  <li class="cd-side__label text-3xl"><a href="add-new-post.php"><span>Add New Product</span></a></li>
  <li class="cd-side__label text-3xl"><a href="all-products.php"><span>All Products</span></a></li>
  <li class="cd-side__label text-3xl"><a href="add-products.php"><span>Add New Category</span></a></li>
  <li class="cd-side__label text-3xl"><a href="add-products.php"><span>Orders</span></a></li>
  <li class="cd-side__label text-3xl"><a href="add-products.php"><span>Pending Orders</span></a></li>
  <li class="cd-side__label  mt-10"><a href="add-products.php"><span>Delivery Mens</span></a></li>
  <li class="cd-side__label text-3xl"><a href="all-delivery-mens.php"><span>All Delivery Mens</span></a></li>
  <li class="cd-side__label text-3xl"><a href="add-new-delivery-men.php"><span>Add New Delivery Men</span></a></li>
   admin routes -->
<!-- <li class="cd-side__label  mt-10"><a href="add-products.php"><span>Admin Routes</span></a></li>
  <li class="cd-side__label text-3xl"><a href="all-users.php"><span>All Users</span></a></li>
  <li class="cd-side__label text-3xl"><a href="add-new-banner.php"><span>Add New Banner</span></a></li>
  <li class="cd-side__label text-3xl"><a href="../public/chat/chat.php?c="><span>Messages</span></a></li> -->
<!-- <li class="cd-side__label text-3xl"><a href="add-products.php"><span>Add New Delivery Men</span></a></li> -->

<!-- </ul> -->



<!-- <ul class="cd-side__list js-cd-side__list mt-10">
    <li class="cd-side__btn"><button class="reset" href="#0">Logout</button></li>
  </ul>
</nav> -->

<div class="fixed w-64 h-screen bg-white shadow-md">
    <div class="p-4 border-b">
        <h1 class="text-2xl font-bold">Admin</h1>
        <p class="text-sm text-gray-500">ecommerce</p>
    </div>
    <div class="sidebar overflow-y-auto">
        <nav class="mt-6">
            <ul>
                <li class="px-6 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer"><a href="index.php">Dashboard</a></li>
                
                <a href="add-new-post.php">
                    <li class="px-6 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer" onclick="toggleDropdown('productsDropdown')">
                        Add New Products
                    </li>
                </a>
                <a href="add-new-category.php">
                    <li class="px-6 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer" onclick="toggleDropdown('productsDropdown')">
                        Add New Category
                    </li>
                </a>
                <a href="add-new-banner.php">
                    <li class="px-6 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer" onclick="toggleDropdown('productsDropdown')">
                        Add New Banner
                    </li>
                </a>
                <a href="add-new-user.php">
                    <li class="px-6 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer" onclick="toggleDropdown('productsDropdown')">
                        Add New User
                    </li>
                </a>

                <a href="orders.php">
                    <li class="px-6 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer">
                        Orders
                    </li>
                </a>
                <!-- Add more items here -->
                <li class="px-6 py-2 text-gray-700 hover:bg-gray-200 cursor-pointer">Logout</li>
            </ul>
        </nav>
    </div>
</div>