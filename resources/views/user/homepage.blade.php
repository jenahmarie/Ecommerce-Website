<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> {{--script for add to cart --}}

</head>
<body>
    <header>
        @include('layouts.header2')
    </header>
    <div class="container mx-auto p-4"> <!-- Add a container with padding -->
    <div class="mt-8 flex">
        <div class="w-1/4 bg-gray-100 p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4 text-blue-600">Categories</h2>
            <ul class="space-y-2">
                <li class="flex justify-between items-center hover:bg-blue-50 p-2 rounded transition duration-200">
                    <span class="text-gray-800">Eyeglasses</span>
                    <i class="fas fa-chevron-right text-gray-500"></i>
                </li>
                <li class="flex justify-between items-center hover:bg-blue-50 p-2 rounded transition duration-200">
                    <span class="text-gray-800">Sunglasses</span>
                    <i class="fas fa-chevron-right text-gray-500"></i>
                </li>
                <li class="flex justify-between items-center hover:bg-blue-50 p-2 rounded transition duration-200">
                    <span class="text-gray-800">Reading Glasses</span>
                    <i class="fas fa-chevron-right text-gray-500"></i>
                </li>
                <li class="flex justify-between items-center hover:bg-blue-50 p-2 rounded transition duration-200">
                    <span class="text-gray-800">Contacts &amp; Solutions</span>
                    <i class="fas fa-chevron-right text-gray-500"></i>
                </li>
            </ul>
        </div>
        <div class="w-3/4 ml-8">
            <h2 class="text-xl font-bold mb-4 text-blue-600">New Arrivals</h2>
            <div class="grid grid-cols-4 gap-4">
                @foreach($products as $product)
                    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-4">
                        <div class="relative">
                            @if($product->discount_price)
                                <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                                    Buy 1 Get $4.00 Off
                                </span>
                            @endif
                            <img alt="{{ $product->name }}" class="w-full h-auto mt-8" height="200" src="{{ asset($product->image_url) }}" width="200"/>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-500 text-sm">{{ $product->category }}</p>
                            <h2 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h2>
                            <div class="flex items-center mt-2">
                                <div class="flex items-center text-yellow-400">
                                    @for ($i = 0; $i < floor($product->rating); $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    @if ($product->rating - floor($product->rating) >= 0.5)
                                        <i class="fas fa-star-half-alt"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                    @for ($i = 0; $i < 5 - ceil($product->rating); $i++)
                                        <i class="far fa-star"></i>
                                    @endfor
                                </div>
                                <span class="text-gray-600 text-sm ml-2">{{ $product->rating }} ({{ $product->reviews_count ?? 0 }})</span>
                            </div>
                            <div class="flex items-center mt-2">
                                <span class="text-lg font-bold text-gray-800">${{ $product->discount_price ?? $product->price }}</span>
                                @if($product->discount_price)
                                    <span class="text-sm text-gray-500 line-through ml-2">${{ $product->price }}</span>
                                @endif
                            </div>
                            <div class="flex items-center mt-4">
                                <button onclick="addToCart({{ json_encode($product) }})" class="w-full bg-green-500 text-white text-sm font-bold py-2 rounded flex items-center justify-center">
                                    <i class="fas fa-cart-plus mr-2"></i>
                                    Add to Cart
                                </button>
                                <button class="ml-2 text-gray-500 hover:text-red-500">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

    <script>
    function addToCart(product) {
        $.ajax({
            url: "{{ route('cart.add') }}",
            method: 'POST',
            data: {
                id: product.id,
                name: product.name,
                price: product.price,
                quantity: 1, // or whatever quantity you want to set
                image_url: product.image_url,
                _token: '{{ csrf_token() }}' // Laravel CSRF token
            },
            success: function(response) {
                alert(response.success);
            },
            error: function() {
                alert('Error adding product to cart');
            }
        });
    }
    </script>
</body>
</html>
