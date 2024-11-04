<html>
 <head>
  <title>
   Checkout Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-sans">
  <div class="container mx-auto p-4">
   <div class="flex justify-between items-center mb-4">
    <div class="text-2xl font-bold">
        <a href="{{ route('landing') }}">
            <img src="{{ asset('images/eyeq_logo.png') }}" alt="Logo" style="width: 70px; height: auto;">
          </a>
    </div>
    <div class="flex space-x-4">
     <a class="text-sm text-gray-600" href="#">
      SECURE CHECKOUT
     </a>
     <a class="text-sm text-gray-600" href="#">
      CONTINUE SHOPPING
     </a>
    </div>
   </div>
   <div class="flex space-x-4">
    <div class="w-2/3 bg-white p-6 rounded shadow">
     <h2 class="text-xl font-bold mb-4">
      SHIPPING ADDRESS
     </h2>
     <form>
      <div class="mb-4">
       <label class="block text-gray-700">
        Location*
       </label>
       <select class="w-full p-2 border border-gray-300 rounded">
        <option>
         Philippines
        </option>
       </select>
      </div>
      <div class="flex space-x-4 mb-4">
       <div class="w-1/2">
        <label class="block text-gray-700">
         First Name*
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" type="text"/>
       </div>
       <div class="w-1/2">
        <label class="block text-gray-700">
         Last Name*
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" type="text"/>
       </div>
      </div>
      <div class="flex space-x-4 mb-4">
       <div class="w-1/2">
        <label class="block text-gray-700">
         PH +63
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" type="text"/>
       </div>
       <div class="w-1/2">
        <label class="block text-gray-700">
         Phone Number*
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" type="text"/>
       </div>
      </div>
      <div class="flex space-x-4 mb-4">
       <div class="w-1/2">
        <label class="block text-gray-700">
         State/Province*
        </label>
        <select class="w-full p-2 border border-gray-300 rounded">
         <option>
         </option>
        </select>
       </div>
       <div class="w-1/2">
        <label class="block text-gray-700">
         City/Municipality*
        </label>
        <input class="w-full p-2 border border-gray-300 rounded" type="text"/>
       </div>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700">
        Post/Zip Code*
       </label>
       <input class="w-full p-2 border border-gray-300 rounded" type="text"/>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700">
        Address Line 1*
       </label>
       <input class="w-full p-2 border border-gray-300 rounded" placeholder="ABC Street/Road/Company/Apartment/Building name" type="text"/>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700">
        NOTE
       </label>
       <input class="w-full p-2 border border-gray-300 rounded" placeholder="Phase/Suite/Unit/Floor, Landmark" type="text"/>
      </div>
      <div class="flex items-center mb-4">
       <input class="mr-2" type="checkbox"/>
       <label class="text-gray-700">
        Make Default
       </label>
      </div>
      <div class="flex justify-between items-center mb-4">
       <a class="text-sm text-gray-600" href="#">
        General Address Tips
       </a>
       <a class="text-sm text-gray-600" href="#">
        Privacy &amp; Cookie Policy
       </a>
      </div>
      <div class="mb-4">
       <a class="text-sm text-gray-600" href="#">
        Security &amp; Privacy
       </a>
       <p class="text-sm text-gray-600">
        We maintain industry-standard physical, technical, and administrative measures to safeguard your personal information.
       </p>
      </div>
      <button class="w-full bg-black text-white p-2 rounded">
       SAVE
      </button>
     </form>
    </div>
    <div class="w-1/3">
     <div class="bg-white p-6 rounded shadow mb-4">
      <h2 class="text-xl font-bold mb-4">
       Order Summary
      </h2>
      <div class="flex justify-between mb-2">
       <span>
        Retail Price:
       </span>
       <span class="line-through">
        ₱456
       </span>
      </div>
      <div class="flex justify-between mb-2">
       <span>
        Subtotal:
       </span>
       <span>
        ₱387
       </span>
      </div>
      <div class="flex items-center mb-4">
       <i class="fas fa-gift text-yellow-500 mr-2">
       </i>
       <span>
        Reward 6 points
       </span>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700">
        Coupon Code
       </label>
       <div class="flex">
        <input class="w-full p-2 border border-gray-300 rounded-l" type="text"/>
        <button class="bg-gray-300 p-2 rounded-r">
         Apply
        </button>
       </div>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700">
        Gift Card
       </label>
       <div class="flex">
        <input class="w-full p-2 border border-gray-300 rounded-l" placeholder="Card Number" type="text"/>
        <input class="w-1/4 p-2 border border-gray-300 rounded-r" placeholder="PIN" type="text"/>
        <button class="bg-gray-300 p-2 rounded-r">
         Apply
        </button>
       </div>
      </div>
      <button class="w-full bg-gray-500 text-white p-2 rounded">
       PLACE ORDER
      </button>
     </div>
     <div class="bg-white p-6 rounded shadow mb-4">
      <h2 class="text-xl font-bold mb-4">
       Payment Security
      </h2>
      <p class="text-sm text-gray-600 mb-4">
       SHEIN is committed to protecting your personal information and only shows your card details on the payment screen. For more information, please check the payment security page.
      </p>
      <div class="flex space-x-2 mb-4">
       <img alt="Visa logo" height="30" src="https://storage.googleapis.com/a1aa/image/Kd4HKpkOAHr5HJre1tDAf1ujJ0humjzaGmJneXqPCE5p3FXnA.jpg" width="50"/>
       <img alt="MasterCard logo" height="30" src="https://storage.googleapis.com/a1aa/image/kZcStxq8B0YebikFrRjiLlwRYe37s9Gw2vSUf1J34POl3FXnA.jpg" width="50"/>
       <img alt="ID Check logo" height="30" src="https://storage.googleapis.com/a1aa/image/smKtztYu3eTmNipETwys7lm69gBACFNjFfpXPSoPVvU17irTA.jpg" width="50"/>
       <img alt="SafeKey logo" height="30" src="https://storage.googleapis.com/a1aa/image/qXkfNe4etnVDFpk3NIa5Dp6GeUPjlQZ9oCuVksRefWA99u46E.jpg" width="50"/>
      </div>
      <h2 class="text-xl font-bold mb-4">
       Security &amp; Privacy
      </h2>
      <p class="text-sm text-gray-600">
       SHEIN ensures secure payment by using the latest encryption technology. SHEIN will not store your credit card information.
      </p>
     </div>
    </div>
   </div>
   <div class="bg-white p-6 rounded shadow mt-4">
    <h2 class="text-xl font-bold mb-4">
     Order Details
    </h2>
    <div class="flex justify-between items-center mb-4">
     <div class="flex items-center">
      <img alt="Product image" class="mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/oRERD4vgx8rLMVgM9BJiHQlb2PbqaOR5Q2SL2wYEnLq7u46E.jpg" width="50"/>
      <div>
       <p class="text-sm text-gray-600">
        ₱387
       </p>
       <p class="text-sm text-gray-600">
        Product
       </p>
      </div>
     </div>
     <div>
      <p class="text-sm text-gray-600">
       1
      </p>
     </div>
    </div>
    <a class="text-sm text-gray-600" href="#">
     View 1 item
    </a>
   </div>
   <div class="bg-white p-6 rounded shadow mt-4">
    <h2 class="text-xl font-bold mb-4">
     PAYMENT METHOD
    </h2>
    <div class="mb-4">
     <input class="mr-2" name="payment" type="radio"/>
     <label class="text-gray-700">
      Cash on Delivery
     </label>
    </div>
    <div class="mb-4">
     <input class="mr-2" name="payment" type="radio"/>
     <label class="text-gray-700">
      GCash (Alipay+ Partner)
     </label>
    </div>
    <div class="mb-4">
     <input class="mr-2" name="payment" type="radio"/>
     <label class="text-gray-700">
      Credit/Debit Card
     </label>
    </div>
    <div class="mb-4">
     <input class="mr-2" name="payment" type="radio"/>
     <label class="text-gray-700">
      PayPal
     </label>
    </div>
    <div class="mb-4">
     <input class="mr-2" name="payment" type="radio"/>
     <label class="text-gray-700">
      GrabPay
     </label>
    </div>
   </div>
  </div>
 </body>
</html>
