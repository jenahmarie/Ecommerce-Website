<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script src="https://js.stripe.com/v3/"></script> <!-- Include Stripe.js -->
</head>
<body class="bg-gray-100 font-sans">
  <div class="container mx-auto p-4">
    <div class="flex justify-between items-center border-b pb-4 mb-4">
      <div class="text-2xl font-bold">
        <a href="{{ route('landing') }}">
          <img src="{{ asset('images/eyeq_logo.png') }}" alt="Logo" style="width: 70px; height: auto;">
        </a>
      </div>
      <div class="flex space-x-4">
        <a class="text-green-600" href="#">
          SECURE CHECKOUT
        </a>
        <a class="text-gray-600" href="#">
          CONTINUE SHOPPING
        </a>
      </div>
    </div>
    <div class="text-sm text-gray-600 mb-4">
      Cart &gt; Place Order &gt; Pay &gt; Order Complete
    </div>
    <form action="{{ route('order.payment') }}" method="POST" id="payment-form">
      @csrf
      <div class="flex">
        <div class="w-2/3 pr-4">
          <div class="bg-white p-4 mb-4">
            <div class="flex justify-between items-center border-b pb-4 mb-4">
              <div class="text-lg font-bold">
                Shipping Address
              </div>
              <a class="text-gray-600" href="#">
                Change
              </a>
            </div>
            <div class="mb-4">
              <div class="font-bold">
                Jenah Marie Rivero 9066205123
              </div>
              <div>
                San Antonio Greenhills
              </div>
              <div>
                SANTO NINO CALAPAN-CITY ORIENTAL-MINDORO Philippines 5200
              </div>
            </div>
            <button class="border border-gray-400 px-4 py-2">
              Edit Address
            </button>
          </div>
          <div class="bg-white p-4 mb-4">
            <div class="text-lg font-bold border-b pb-4 mb-4">
              Order Details
            </div>
            <div class="flex mb-4">
              <img alt="Product image of a brown skirt" class="w-24 h-24 object-cover" height="100" src="{{ asset('images/eyeglass 3.jpg') }}" width="100"/>
              <div class="ml-4">
                <div class="text-red-500 font-bold">
                  -15%
                </div>
                <div class="text-red-500 font-bold">
                  ₱356
                </div>
                <div class="text-gray-600">
                  ₱476
                </div>
                <div class="flex items-center mt-2">
                  <button class="border border-gray-400 px-2">-</button>
                  <input class="w-12 text-center border-t border-b border-gray-400" type="text" value="1"/>
                  <button class="border border-gray-400 px-2">+</button>
                </div>
              </div>
            </div>
            <div class="border-t pt-4">
              <div class="text-lg font-bold mb-2">
                CHOOSE YOUR SHIPPING OPTIONS
              </div>
              <div class="flex items-center mb-2">
                <input class="mr-2" name="shipping" type="radio"/>
                <div>
                  <div>
                    STANDARD SHIPPING
                    <span class="text-green-600">Free Shipping</span>
                  </div>
                  <div class="text-gray-600">₱0 (Arrives between Nov 4 - Nov 7.)</div>
                </div>
              </div>
              <div class="flex items-center">
                <input class="mr-2" type="checkbox"/>
                <div>
                  Shipping Guarantee
                  <span class="text-green-600">FREE</span>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white p-4 ">
            <div class="text-lg font-bold border-b pb-4 mb-4">
              PAYMENT METHOD
            </div>
            <div class="flex items-center mb-4">
              <input class="mr-2" name="payment" type="radio" value="stripe" checked/>
              <div class="flex items-center">
                <img alt="Credit/Debit Card icons" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/QwEunSFgLMY4EZK1gafz0nsTytyfitbOdjfoeMJcB7FGcMuOB.jpg" width="24"/>
                <div>Credit/Debit Card (via Stripe)</div>
              </div>
            </div>
            <div id="card-element" class="border p-2 mb-4"></div>
            <div id="card-errors" role="alert" class="text-red-500 mb-2"></div>
          </div>
        </div>
        <div class="w-1/3">
          <div class="bg-white p-4 mb-4">
            <div class="text-lg font-bold border-b pb-4 mb-4">
              Order Summary
            </div>
            <div class="flex justify-between mb-2">
              <div>Retail Price:</div>
              <div class="line-through">₱476</div>
            </div>
            <div class="flex justify-between mb-2">
              <div>Subtotal:</div>
              <div>₱404</div>
            </div>
            <div class="flex justify-between mb-2">
              <div>Shipping fee:</div>
              <div class="text-green-600">FREE</div>
            </div>
            <div class="flex justify-between mb-2">
              <div>Shipping Guarantee:</div>
              <div class="text-green-600">FREE</div>
            </div>
            <div class="flex justify-between mb-2">
              <div>Discount:</div>
              <div class="text-red-500">-₱48</div>
            </div>
            <div class="flex justify-between font-bold text-lg mb-4">
              <div>Grand Total:</div>
              <div>₱356</div>
            </div>
            <div class="flex items-center mb-4">
              <img alt="Reward points icon" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/GRL6z5m9nzIRGZIC9IcuKfKjRTdQKOjEbYGYx2tASge9GjrTA.jpg" width="24"/>
              <div>Reward 6 points</div>
            </div>
            <div class="mb-4">
              <div class="text-lg font-bold mb-2">Coupon Code</div>
              <div class="flex mb-2">
                <input class="border border-gray-400 p-2 w-full" type="text" placeholder="Enter your coupon code" />
                <button class="bg-green-600 text-white px-4">Apply</button>
              </div>
              <div class="text-gray-600">*One coupon per purchase</div>
            </div>
            <button class="bg-green-600 text-white px-4 py-2 w-full" id="submit-btn">
              PLACE ORDER
            </button>
          </div>
        </div>
      </div>
    </form>

    <script>
      var stripe = Stripe('{{ env('STRIPE_KEY') }}');
      var elements = stripe.elements();
      var cardElement = elements.create('card');
      cardElement.mount('#card-element');

      var form = document.getElementById('payment-form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.createToken(cardElement).then(function(result) {
          if (result.error) {
            // Show error in #card-errors
            document.getElementById('card-errors').textContent = result.error.message;
          } else {
            // Send the token to your server
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', result.token.id);
            form.appendChild(hiddenInput);
            form.submit();
          }
        });
      });
    </script>
  </div>
</body>
</html>
