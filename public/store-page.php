<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100">
    <!-- header section start -->
    <?php require_once('includes/include-header.php') ?>
    <!-- header section end -->
    <div class="w-[70rem] m-auto mt-5">
        <!-- Header Section -->
        <div class="container mx-auto p-4 bg-white shadow-md flex flex-col md:flex-row items-center justify-between bg-cover bg-center" style="background-image: url('https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg');">
            <!-- Logo and Seller Info -->
            <div class="flex items-center space-x-4 bg-white p-4 rounded-md">
                <!-- Logo -->
                <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Cotton Lab Logo" class="w-16 h-16 rounded-full">
                <!-- Seller Info -->
                <div>
                    <h1 class="text-2xl font-bold">Cotton Lab.</h1>
                    <p class="text-gray-600">2660 Followers</p>
                    <p class="text-green-500">81% Positive Seller Ratings</p>
                </div>
            </div>
            <!-- Buttons -->
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="chat.php"><button class="bg-blue-500 text-white px-4 py-2 rounded">Chat Now</button></a>
                <button class="bg-orange-500 text-white px-4 py-2 rounded">FOLLOW</button>
            </div>
        </div>

        <div class="container mx-auto p-4">
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Stylish Hoodie with pant For Man</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 845</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat the above block for each product -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
                <!-- Example product card -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">New Fashion Export Bonded Jacket For Men</h2>
                        <p class="text-red-500 font-bold mt-2">৳ 745</p>
                        <p class="text-gray-500 line-through">৳ 1,250</p>
                        <button class="mt-4 w-full bg-pink-500 text-white py-2 rounded">Buy Now</button>
                    </div>
                </div>
                <!-- Repeat for all products in the image -->
            </div>
        </div>
    </div>

</body>

</html>