<?php
require_once('public/functions/client-controller.php');
$clientObject = new client_controller('admin2/includes/database_connection.php');
$fetchProduct = $clientObject->fetchData('products', null, null, 'product_id', 'desc');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100 font-serif">
    <!-- header section start -->
    <?php require_once('public/includes/include-header.php') ?>
    <!-- header section end -->

    <div class="w-[70rem] m-auto flex gap-2 mt-7">
        <div class="bg-white w-[25rem] p-2 text-gray-800">
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Women</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Men</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Children</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Tops</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Bottoms</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Shoes</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Bags</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Accessories</h2>
            <h2 class="text-xl mt-3 border-black border-b border-1 border-gray-200 p-1">Others</h2>
        </div>
        <div class="w-full h-[10rem]">


            <img class="h-[28.5rem] w-full" src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" />



        </div>
    </div>
    <div class="w-[70rem] m-auto">
        <div class=" mt-8 flex justify-between bg-white p-2 text-xl">
            <div class=" p-2 border-r-2">
                <h2>Free Delivery</h2>
                <small>Free World Wide Shipping</small>
            </div>
            <div class=" p-2 border-r-2">
                <h2>Member Discount</h2>
                <small>Free Deals every week</small>
            </div>
            <div class=" p-2 border-r-2">
                <h2>Money Back</h2>
                <small>Refund in 30 days</small>
            </div>
            <div class=" p-2 border-r-2">
                <h2>Secure Payment</h2>
                <small>No transaction fees</small>
            </div>
            <div class="">
                <h2>Free Return</h2>
                <small>Refund in 365 days</small>
            </div>
        </div>
        <div class="flex gap-2">
            <div class="h-[15rem] w-[25rem] mt-8">
                <img class="w-full rounded-md" src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" />

            </div>
            <div class=" h-[15rem] w-[25rem] mt-8">
                <img class="w-full rounded-md" src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" />
            </div>
            <div class=" h-[15rem] w-[25rem] mt-8">
                <img class="w-full rounded-md" src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" />
            </div>
        </div>
        <!-- top category list start here -->
        <div>
            <h2 class="mt-10">Top Categories of the month</h2>
            <div class="bg-white mt-8 p-2 flex grid grid-cols-4">
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="flex items-center gap-2 border p-1 justify-between">
                    <div>
                        <h2>Women</h2>
                        <small>(13) Products</small>
                    </div>
                    <div>
                        <img class="w-[8rem] h-[8rem]" src="https://i.ibb.co/2Z48c6b/product-01.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- top category list end here -->

        <!-- product sections start from here -->

        <div>
            <h2 class="mt-10 mb-8">Products you may like</h2>
            <div class="grid grid-cols-5">
                <?php
                if ($fetchProduct) {

                    foreach ($fetchProduct as $rows) {

                ?>
                        <a href="public/detail.php?pro=<?php echo $rows['product_id']   ?>">
                            <div class="bg-white p-2 w-[13.6rem] mb-2 h-[18rem]">
                                <img class="w-full h-[13rem]" src="admin2/images/<?php echo $rows['image']; ?>" alt="">
                                <div>
                                    <h2><?php echo $rows['product_title'] ?></h2>
                                </div>
                                <div>
                                    <h2 class="text-orange-500" >৳ <?php echo $rows['product_price'] ?></h2>
                                </div>
                            </div>
                        </a>
                    <?php }
                } else { ?>
                    <h2>No Product Available</h2>
                <?php } ?>

            </div>

        </div>
    </div>

    <footer class="bg-white text-gray-900 mt-10">
        <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Company</h3>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in neque
                        et nisl.</p>
                    <div class="mt-4">
                        <img class="h-8 w-auto" src="https://via.placeholder.com/100" alt="Logo">
                    </div>
                </div>
                <!-- Customer Service -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Customer Service</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:underline">Contact Us</a></li>
                        <li><a href="#" class="hover:underline">Returns</a></li>
                        <li><a href="#" class="hover:underline">Shipping</a></li>
                        <li><a href="#" class="hover:underline">FAQs</a></li>
                    </ul>
                </div>
                <!-- Information -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Information</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:underline">About Us</a></li>
                        <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                        <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:underline">Careers</a></li>
                    </ul>
                </div>
                <!-- Newsletter Signup -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Stay Connected</h3>
                    <p class="text-sm mb-4">Sign up for our newsletter to get the latest news and special offers.
                    </p>
                    <form action="#" method="POST">
                        <div class="flex items-center border-b border-gray-700 py-2">
                            <input class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none" type="email" placeholder="Your email" aria-label="Email">
                            <button class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 text-sm text-white py-1 px-2 rounded" type="button">
                                Sign Up
                            </button>
                        </div>
                    </form>
                    <!-- Social Media Links -->
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.65 9.12 8.44 9.88v-7h-2.5v-2.88h2.5V9.82c0-2.47 1.5-3.82 3.7-3.82 1.06 0 1.97.08 2.24.11v2.6h-1.54c-1.2 0-1.43.57-1.43 1.4v1.84h2.84l-.45 2.88h-2.39v7C18.35 21.12 22 16.99 22 12z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.35-.01-.53A8.36 8.36 0 0022 5.92a8.19 8.19 0 01-2.36.65 4.09 4.09 0 001.8-2.26 8.19 8.19 0 01-2.6.99 4.09 4.09 0 00-6.97 3.73A11.62 11.62 0 013.11 4.88a4.09 4.09 0 001.26 5.46 4.09 4.09 0 01-1.85-.51v.05a4.09 4.09 0 003.28 4.01 4.07 4.07 0 01-1.84.07 4.09 4.09 0 003.82 2.83 8.22 8.22 0 01-5.1 1.76A8.32 8.32 0 012 18.42 11.59 11.59 0 008.29 20z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM4.5 7.75A3.25 3.25 0 017.75 4.5h8.5A3.25 3.25 0 0119.5 7.75v8.5a3.25 3.25 0 01-3.25 3.25h-8.5A3.25 3.25 0 014.5 16.25v-8.5zM12 7.5a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.5a3 3 0 110-6 3 3 0 010 6zm4.5-7.5a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex justify-between items-center text-sm">
                <p>&copy; 2024 ShopName. All rights reserved.</p>
                <p>Designed by YourCompanyName</p>
            </div>
        </div>
    </footer>
</body>

</html>