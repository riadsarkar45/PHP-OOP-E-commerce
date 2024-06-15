<nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-8 w-8" src="https://via.placeholder.com/40" alt="Logo">
                        <span class="text-xl font-semibold ml-2">ShopName</span>
                    </div>
                    <!-- Navigation Links -->
                    <div class="hidden md:flex md:items-center md:space-x-4 ml-6">
                        <a href="../index.php"
                            class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#"
                            class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Shop</a>
                        <a href="#"
                            class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Categories</a>
                        <a href="#"
                            class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Deals</a>
                    </div>
                </div>
                <!-- Search Bar -->
                <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                    <div class="max-w-lg w-full lg:max-w-xs">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 2a8 8 0 018 8 8 8 0 11-8-8zm6.93 10.38a10 10 0 111.66-1.66l4.95 4.95-1.41 1.41-4.95-4.95z" />
                                </svg>
                            </div>
                            <input id="search" name="search"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="Search" type="search">
                        </div>
                    </div>
                </div>
                <!-- Icons -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <button
                            class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C6.67 7.165 6 9.388 6 11v3.159c0 .417-.152.812-.405 1.124L4 17h5m6 0v1a3 3 0 01-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <!-- Shopping Cart -->
                    <div class="ml-4 flow-root lg:ml-6">
                        <a href="#" class="group -m-2 p-2 flex items-center">
                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 5.35a1 1 0 00.97 1.15h10.76a1 1 0 00.97-1.15L17 13M7 13L5.4 7m6 6v3m4-3v3" />
                            </svg>
                            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                            <span class="sr-only">items in cart, view bag</span>
                        </a>
                    </div>
                    <!-- User Profile -->
                    <div class="ml-4 relative">
                        <div>
                            <button type="button"
                                class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/32" alt="">
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>