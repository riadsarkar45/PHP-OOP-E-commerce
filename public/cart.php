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
    <?php require_once('includes/include-header.php') ?>
    <!-- header section end -->
    <div class="w-[70rem] m-auto mt-5">
        <div class="container mx-auto p-4">
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="w-full md:w-2/3 bg-white p-4 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-4">Shopping Bag</h2>
                    <p class="mb-4">2 items in your bag</p>
                    <div class="flex items-center justify-between border-b pb-4 mb-4">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/80" alt="Product 1" class="w-20 h-20 object-cover rounded-lg">
                            <div class="ml-4">
                                <h3 class="font-semibold">Floral Print Wrap Dress</h3>
                                <p class="text-gray-500">Size: M</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-semibold">$20.50</p>
                            <div class="flex items-center mt-2">
                                <button class="px-2 py-1 bg-gray-200 rounded">-</button>
                                <span class="px-2">1</span>
                                <button class="px-2 py-1 bg-gray-200 rounded">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between border-b pb-4 mb-4">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/80" alt="Product 2" class="w-20 h-20 object-cover rounded-lg">
                            <div class="ml-4">
                                <h3 class="font-semibold">Floral Print Wrap Dress</h3>
                                <p class="text-gray-500">Size: L</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-semibold">$30.50</p>
                            <div class="flex items-center mt-2">
                                <button class="px-2 py-1 bg-gray-200 rounded">-</button>
                                <span class="px-2">1</span>
                                <button class="px-2 py-1 bg-gray-200 rounded">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between border-b pb-4 mb-4">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/80" alt="Product 2" class="w-20 h-20 object-cover rounded-lg">
                            <div class="ml-4">
                                <h3 class="font-semibold">Floral Print Wrap Dress</h3>
                                <p class="text-gray-500">Size: L</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-semibold">$30.50</p>
                            <div class="flex items-center mt-2">
                                <button class="px-2 py-1 bg-gray-200 rounded">-</button>
                                <span class="px-2">1</span>
                                <button class="px-2 py-1 bg-gray-200 rounded">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-lg font-semibold">Total: $51.00</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 bg-white p-4 rounded-lg shadow mt-4 md:mt-0">
                    <h2 class="text-2xl font-bold mb-4">Calculated Shipping</h2>
                    <div class="mb-4">
                        <label for="country" class="block text-gray-700">Country</label>
                        <select id="country" class="w-full p-2 border rounded">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="zip" class="block text-gray-700">Zip Code</label>
                        <input type="text" id="zip" class="w-full p-2 border rounded" placeholder="Zip Code">
                    </div>
                    <button class="w-full bg-blue-500 text-white p-2 rounded">Update</button>
                    <h2 class="text-2xl font-bold mt-6 mb-4">Coupon Code</h2>
                    <input type="text" class="w-full p-2 border rounded mb-4" placeholder="Coupon Code">
                    <button class="w-full bg-blue-500 text-white p-2 rounded">Apply</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>