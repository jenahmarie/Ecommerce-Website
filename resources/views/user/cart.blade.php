<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-white">
    <header>
        @include('layouts.header2')
    </header>

    <main class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Shopping Cart</h1>
            <div class="relative">
                <input class="p-2 rounded border border-gray-300" placeholder="Add to Cart 11.11 Deals!" type="text"/>
                <button class="absolute right-0 top-0 mt-2 mr-2 text-orange-500">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="bg-white p-4 rounded shadow border border-gray-300">
            @if($cart && count($cart) > 0)
                <div class="flex justify-between items-center border-b pb-2 mb-2">
                    <div class="flex items-center space-x-4 w-1/2">
                        <input class="mr-2" type="checkbox"/>
                        <span>Product</span>
                    </div>
                    <div class="flex justify-between space-x-4 w-1/2 text-center">
                        <span>Unit Price</span>
                        <span>Quantity</span>
                        <span>Total Price</span>
                        <span>Actions</span>
                    </div>
                </div>

                @foreach($cart as $item)
                    <div class="border-b pb-2 mb-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center w-1/2 space-x-4">
                                <input type="checkbox"/>
                                <img src="{{ $item['image_url'] }}" alt="Product Image" class="w-16 h-auto rounded">
                                <div>
                                    <p>{{ $item['name'] }}</p>
                                    <span class="text-sm text-gray-500">Variations: N/A</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between w-1/2 space-x-6 text-center">
                                <div class="text-red-500">₱{{ number_format($item['price'], 2) }}</div>
                                <div class="flex items-center">
                                    <button class="px-2 py-1 border border-gray-300">-</button>
                                    <input class="w-12 text-center border border-gray-300 mx-1" type="text" value="{{ $item['quantity'] }}"/>
                                    <button class="px-2 py-1 border border-gray-300">+</button>
                                </div>
                                <div class="text-red-500">₱{{ number_format($item['price'] * $item['quantity'], 2) }}</div>
                                <div class="flex flex-col space-y-1">
                                    <span class="text-blue-500 cursor-pointer">Delete</span>
                                    <span class="text-blue-500 cursor-pointer">Find Similar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="flex justify-between items-center pt-4">
                    <div class="flex items-center space-x-4">
                        <input type="checkbox"/>
                        <span>Select All ({{ count($cart) }})</span>
                        <button class="ml-4 text-red-500">Delete</button>
                        <button class="ml-4 text-orange-500">Move to My Likes</button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="text-red-500">Total: ₱{{ number_format(array_sum(array_column($cart, 'price')), 2) }}</div>
                        <button onclick="location.href='{{ route('checkout') }}'" class="bg-orange-500 text-white px-4 py-2 rounded ml-4">Check Out</button>
                    </div>
                </div>
            @else
                <p>Your cart is empty.</p>
            @endif
        </div>
    </main>

    <button class="fixed bottom-4 right-4 bg-orange-500 text-white p-4 rounded-full flex items-center">
        <i class="fas fa-comments"></i>
        <span class="ml-2">Chat</span>
    </button>
</body>
</html>
