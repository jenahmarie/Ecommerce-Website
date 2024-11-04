<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Eye-Q Optical
       </title>
       <script src="https://cdn.tailwindcss.com"> </script>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
       <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
       <style>
        body {
                 font-family: 'Inter', sans-serif;
             }
       </style>
 {{-- Footer --}}
 <script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 <style>
     .chat-window {
         display: none;
         position: fixed;
         bottom: 80px;
         right: 20px;
         width: 300px;
         max-height: 400px;
         background: white;
         border: 1px solid #ccc;
         border-radius: 8px;
         box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         z-index: 1000;
     }
     .chat-header {
         background: #3b82f6;
         color: white;
         padding: 10px;
         border-top-left-radius: 8px;
         border-top-right-radius: 8px;
     }
     .chat-body {
         padding: 10px;
         overflow-y: auto;
         max-height: 300px;
     }
     .chat-footer {
         padding: 10px;
         border-top: 1px solid #ccc;
     }
 </style>
 {{-- Footer --}}

      </head>

 <body class="bg-gray-100">

    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
         <div class="flex items-center space-x-4">
          <div class="flex items-center space-x-1">
           <span>
            USD $
           </span>
           <i class="fas fa-chevron-down">
           </i>
          </div>
          <div class="flex items-center space-x-1">
           <span>
            English
           </span>
           <i class="fas fa-chevron-down">
           </i>
          </div>
         </div>
         <div class="flex items-center space-x-4">
          <a class="text-gray-600" href="#">
           Support
          </a>
          <a class="text-gray-600" href="#">
           Delivery
          </a>
          <a class="text-gray-600" href="#">
           Warranty
          </a>
         </div>
        </div>
       </header>
       <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
         <div class="flex items-center space-x-4">
             <div class="text-green-600 text-2xl font-bold">
                 <a href="{{ route('landing') }}">
                     <img src="{{ asset('images/eyeq_logo.png') }}" alt="Image Description" style="width: 150px; height: auto;">
                 </a>
             </div>
          <div class="relative">
           <input class="border rounded-full py-2 px-4 w-96" placeholder="Search for products" type="text"/>
           <button class="absolute right-0 top-0 mt-2 mr-4 text-green-600">
            <i class="fas fa-search">
            </i>
           </button>
          </div>
         </div>
         <div class="flex items-center space-x-4">
             {{-- <a class="text-gray-600" href="#">
                 <i class="fas fa-bell"></i> <!-- Notification Icon -->
             </a>
             <a class="text-gray-600" href="#">
                 <i class="fas fa-heart"></i> <!-- Heart Icon -->
             </a>
             <a class="text-gray-600" href="{{ route('cart') }}">
                 <i class="fas fa-shopping-cart"></i> <!-- Shopping Cart Icon -->
             </a> --}}
             <a class="text-gray-600" href="{{ route('login') }}">
                 <i class="fas fa-user"></i> <!-- Profile Icon -->
             </a>

             {{-- <a class="text-gray-600" href="#">
                 My Orders
             </a> --}}
         </div>
     </div>
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
         <div class="flex items-center space-x-4">
          <a class="text-gray-600" href="#">
           Home
          </a>
          <a class="text-gray-600" href="#">
           Eyeglasses
          </a>
          <a class="text-gray-600" href="#">
           Sunglasses
          </a>
          <a class="text-gray-600" href="#">
           Reading Glasses
          </a>
          <a class="text-gray-600" href="#">
           Contacts / Solutions
          </a>
          <a class="text-gray-600" href="#">
           Accessories
          </a>
          <a class="text-gray-600" href="#">
           Sale
          </a>
          {{-- <a class="text-gray-600" href="#">
           Dashboard
          </a>
          <a class="text-gray-600" href="#">
           Docs
          </a> --}}
         </div>
        </div>
       </nav>
       <main class="container mx-auto px-4 py-8">
         <div class="bg-white shadow-lg border border-gray-200 rounded-lg p-8 flex items-center justify-between">
             <div>
                 <h1 class="text-4xl font-bold">
                     Your Perfect Vision Starts Here
                 </h1>
                 <p class="mt-4">
                     Discover stylish, high-quality eyeglasses with unmatched convenience and home delivery at your doorstep.
                 </p>

                 <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded-full" href="{{ route('landing') }}">
                     Shop Now
                 </button>

             </div>
             <div class="relative">
                 <img alt="Woman holding grocery items" class="rounded-lg" height="400" src="{{ asset('images/woman_wearing_eyeglass.png') }}" width="300"/>
                 <div class="absolute top-0 right-0 bg-white p-2 rounded-lg shadow-lg">
                     {{-- <p>
                         Kiwi - 4 pcs
                     </p>
                     <p>
                         4.9 (2400 reviews)
                     </p>
                 </div>
                 <div class="absolute bottom-0 left-0 bg-white p-2 rounded-lg shadow-lg">
                     <p>
                         Delivery Done!
                     </p>
                 </div>
                 <div class="absolute bottom-0 right-0 bg-white p-2 rounded-lg shadow-lg">
                     <p>
                         Avocado
                     </p>
                     <p>
                         0.5
                     </p> --}}
                 </div>
             </div>
         </div>

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
            <h2 class="text-xl font-bold mb-4 text-blue-600">
                New Arrivals
            </h2>
            <div class="grid grid-cols-4 gap-4">
                <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <div class="relative">
                     <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                      Buy 1 Get $4.00 Off
                     </span>
                     <img alt="Cadbury 5 Star Bites package" class="w-full h-auto mt-8" height="200" src="{{ asset('images/eyeglass 1.jpg') }}" width="200"/>
                    </div>
                    <div class="mt-4">
                     <p class="text-gray-500 text-sm">
                      Bakery &amp; Biscuits
                     </p>
                     <h2 class="text-lg font-semibold text-gray-800">
                      Cadbury 5 Star Chocolate
                     </h2>
                     <div class="flex items-center mt-2">
                      <div class="flex items-center text-yellow-400">
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star-half-alt">
                       </i>
                       <i class="far fa-star">
                       </i>
                      </div>
                      <span class="text-gray-600 text-sm ml-2">
                       4.3 (4)
                      </span>
                     </div>
                     <div class="flex items-center mt-2">
                      <span class="text-lg font-bold text-gray-800">
                       $35
                      </span>
                      <span class="text-sm text-gray-500 line-through ml-2">
                       $39
                      </span>
                     </div>
                     <div class="flex items-center mt-4">
                      <button class="w-full bg-green-500 text-white text-sm font-bold py-2 rounded flex items-center justify-center">
                       <i class="fas fa-cart-plus mr-2">
                       </i>
                       Add to Cart
                      </button>
                      <button class="ml-2 text-gray-500 hover:text-red-500">
                       <i class="fas fa-heart">
                       </i>
                      </button>
                     </div>
                    </div>
                   </div>
                   <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <div class="relative">
                     <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                      Buy 1 Get $4.00 Off
                     </span>
                     <img alt="Cadbury 5 Star Bites package" class="w-full h-auto mt-8" height="200" src="{{ asset('images/eyeglass 4.jpg') }}" width="200"/>
                    </div>
                    <div class="mt-4">
                     <p class="text-gray-500 text-sm">
                      Bakery &amp; Biscuits
                     </p>
                     <h2 class="text-lg font-semibold text-gray-800">
                      Cadbury 5 Star Chocolate
                     </h2>
                     <div class="flex items-center mt-2">
                      <div class="flex items-center text-yellow-400">
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star-half-alt">
                       </i>
                       <i class="far fa-star">
                       </i>
                      </div>
                      <span class="text-gray-600 text-sm ml-2">
                       4.3 (4)
                      </span>
                     </div>

                     <div class="flex items-center mt-2">
                      <span class="text-lg font-bold text-gray-800">
                       $35
                      </span>
                      <span class="text-sm text-gray-500 line-through ml-2">
                       $39
                      </span>
                     </div>
                     <div class="flex items-center mt-4">
                      <button class="w-full bg-green-500 text-white text-sm font-bold py-2 rounded flex items-center justify-center">
                       <i class="fas fa-cart-plus mr-2">
                       </i>
                       Add to Cart
                      </button>
                      <button class="ml-2 text-gray-500 hover:text-red-500">
                       <i class="fas fa-heart">
                       </i>
                      </button>
                     </div>
                    </div>
                   </div>

                   <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <div class="relative">
                     <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                      Buy 1 Get $4.00 Off
                     </span>
                     <img alt="Cadbury 5 Star Bites package" class="w-full h-auto mt-8" height="200" src="{{ asset('images/eyeglass 2.jpg') }}" width="200"/>
                    </div>
                    <div class="mt-4">
                     <p class="text-gray-500 text-sm">
                      Bakery &amp; Biscuits
                     </p>
                     <h2 class="text-lg font-semibold text-gray-800">
                      Cadbury 5 Star Chocolate
                     </h2>
                     <div class="flex items-center mt-2">
                      <div class="flex items-center text-yellow-400">
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star-half-alt">
                       </i>
                       <i class="far fa-star">
                       </i>
                      </div>
                      <span class="text-gray-600 text-sm ml-2">
                       4.3 (4)
                      </span>
                     </div>
                     <div class="flex items-center mt-2">
                      <span class="text-lg font-bold text-gray-800">
                       $35
                      </span>
                      <span class="text-sm text-gray-500 line-through ml-2">
                       $39
                      </span>
                     </div>
                     <div class="flex items-center mt-4">
                      <button class="w-full bg-green-500 text-white text-sm font-bold py-2 rounded flex items-center justify-center">
                       <i class="fas fa-cart-plus mr-2">
                       </i>
                       Add to Cart
                      </button>
                      <button class="ml-2 text-gray-500 hover:text-red-500">
                       <i class="fas fa-heart">
                       </i>
                      </button>
                     </div>
                    </div>
                   </div>

                   <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <div class="relative">
                     <span class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                      Buy 1 Get $4.00 Off
                     </span>
                     <img alt="Cadbury 5 Star Bites package" class="w-full h-auto mt-8" height="200" src="{{ asset('images/eyeglass 3.jpg') }}" width="200"/>
                    </div>
                    <div class="mt-4">
                     <p class="text-gray-500 text-sm">
                      Bakery &amp; Biscuits
                     </p>
                     <h2 class="text-lg font-semibold text-gray-800">
                      Cadbury 5 Star Chocolate
                     </h2>
                     <div class="flex items-center mt-2">
                      <div class="flex items-center text-yellow-400">
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star">
                       </i>
                       <i class="fas fa-star-half-alt">
                       </i>
                       <i class="far fa-star">
                       </i>
                      </div>
                      <span class="text-gray-600 text-sm ml-2">
                       4.3 (4)
                      </span>
                     </div>
                     <div class="flex items-center mt-2">
                      <span class="text-lg font-bold text-gray-800">
                       $35
                      </span>
                      <span class="text-sm text-gray-500 line-through ml-2">
                       $39
                      </span>
                     </div>
                     <div class="flex items-center mt-4">
                      <button class="w-full bg-green-500 text-white text-sm font-bold py-2 rounded flex items-center justify-center">
                       <i class="fas fa-cart-plus mr-2">
                       </i>
                       Add to Cart
                      </button>
                      <button class="ml-2 text-gray-500 hover:text-red-500">
                       <i class="fas fa-heart">
                       </i>
                      </button>
                     </div>
                    </div>
                   </div>


            </div>
        </div>
    </div>
</div>

  </main>

  <footer>
    @include('layouts.footer')
  </footer>
 </body>
</html>
