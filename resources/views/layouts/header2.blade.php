<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="path/to/your/styles.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <!-- Left Side -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-1">
                    <span>USD $</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="flex items-center space-x-1">
                    <span>English</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-4">
                <a class="text-gray-600" href="#">Support</a>
                <a class="text-gray-600" href="#">Delivery</a>
                <a class="text-gray-600" href="#">Warranty</a>
            </div>
        </div>
    </header>

    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo and Search Bar -->
            <div class="flex items-center space-x-4">
                <div class="text-green-600 text-2xl font-bold">
                    <a href="{{ route('landing') }}">
                        <img src="{{ asset('images/eyeq_logo.png') }}" alt="Logo" style="width: 150px; height: auto;">
                    </a>
                </div>
                <div class="relative">
                    <input class="border rounded-full py-2 px-4 w-96" placeholder="Search for products" type="text"/>
                    <button class="absolute right-0 top-0 mt-2 mr-4 text-green-600">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Icons and Dropdown -->
            <div class="flex items-center space-x-4">
                <a class="text-gray-600" href="#"><i class="fas fa-bell"></i></a>
                <a class="text-gray-600" href="#"><i class="fas fa-heart"></i></a>
                <a class="text-gray-600" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>

                <!-- Profile Icon with Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = ! open" class="text-gray-600 focus:outline-none">
                        <i class="fas fa-user"></i>
                    </button>

                    <!-- Dropdown Content -->
                    <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white border rounded shadow-lg z-50" style="display: none;">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            {{ __('Profile') }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Navigation Links -->
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a class="text-gray-600" href="#">Home</a>
                <a class="text-gray-600" href="#">Eyeglasses</a>
                <a class="text-gray-600" href="#">Sunglasses</a>
                <a class="text-gray-600" href="#">Reading Glasses</a>
                <a class="text-gray-600" href="#">Contacts / Solutions</a>
                <a class="text-gray-600" href="#">Accessories</a>
                <a class="text-gray-600" href="#">Sale</a>
            </div>
        </div>
    </nav>

    <!-- Include Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
