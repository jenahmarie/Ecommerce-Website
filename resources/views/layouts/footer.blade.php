
<footer class="bg-blue-200 py-8" style="margin-top: 40px;">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-6 gap-8">
            <div>
                <h3 class="font-bold mb-4">Products</h3>
                <ul>
                    <li class="mb-2"><a class="text-gray-600" href="#">Eyeglasses</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Contact Lens & solutions</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Reading Glasses</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Sunglasses</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-4">Information</h3>
                <ul>
                    <li class="mb-2"><a class="text-gray-600" href="#">Branch Locator</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Corporate Partners</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Careers</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">What’s New</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Our Blog</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-4">Help</h3>
                <ul>
                    <li class="mb-2"><a class="text-gray-600" href="#">Book an Appointment</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Return and Warranty</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">About Us</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Contact Us</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">FAQ</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-4">Terms & Conditions</h3>
                <ul>
                    <li class="mb-2"><a class="text-gray-600" href="#">Terms and Conditions</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Loyalty Rewards</a></li>
                </ul>
                <h3 class="font-bold mt-8 mb-4">Privacy Policy</h3>
                <ul>
                    <li class="mb-2"><a class="text-gray-600" href="#">Privacy Notice</a></li>
                    <li class="mb-2"><a class="text-gray-600" href="#">Cookie Policy</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a class="text-blue-600" href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a class="text-blue-600" href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    <a class="text-blue-600" href="#"><i class="fab fa-viber fa-2x"></i></a>
                    <a class="text-blue-600" href="#"><i class="fab fa-facebook-messenger fa-2x"></i></a>
                    <a class="text-blue-600" href="#"><i class="fab fa-youtube fa-2x"></i></a>
                    <a class="text-blue-600" href="#"><i class="fab fa-tiktok fa-2x"></i></a>
                    <a class="text-blue-600" href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    <a class="text-blue-600" href="#"><i class="fab fa-pinterest fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 mt-8">
        <div class="flex justify-between items-center">
            <p class="text-gray-600">© 2024 EYE-Q Optical. All right reserved.</p>
            <div class="flex space-x-4">
                <img src="https://storage.googleapis.com/a1aa/image/YzsE9eYmYRWuXSdxLFeOfvEgf3gXM0srPSrekyPedDC6Gf80JA.jpg" alt="Maya logo" width="40" height="20">
                <img src="https://storage.googleapis.com/a1aa/image/aC2VX0fB2xzHYykQeJCne9ECyGXoahhdWltqLD0pdeeAjPPdC.jpg" alt="GCash logo" width="40" height="20">
                <img src="https://storage.googleapis.com/a1aa/image/tJNXT6bcUHrLNhBRG8aNt2gZuakbnwDVJS2aeDVifR0X85pTA.jpg" alt="PayPal logo" width="40" height="20">
                <img src="https://storage.googleapis.com/a1aa/image/4TPxsj7ne8yQHyxrKE0TpUc6YIepdQwYjx2TUK5iuyCV85pTA.jpg" alt="Mastercard logo" width="40" height="20">
                <img src="https://storage.googleapis.com/a1aa/image/XaRxPH1RwjZGDJhIrJlArxAk0R51idxfknqt3Ka51kqMe5pTA.jpg" alt="Visa logo" width="40" height="20">
            </div>
        </div>
    </div>
    <div class="fixed bottom-4 right-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full flex items-center" onclick="toggleChat()">
            <i class="fas fa-comments mr-2"></i> Chat with us
        </button>
    </div>
    <div class="chat-window" id="chatWindow">
        <div class="chat-header">
            <h4>Chat with us</h4>
            <button class="text-white" onclick="toggleChat()">X</button>
        </div>
        <div class="chat-body">
            <p class="text-gray-600">Hello! How can we help you today?</p>
        </div>
        <div class="chat-footer">
            <input type="text" class="w-full border rounded px-2 py-1" placeholder="Type your message...">
        </div>
    </div>
</footer>
<script>
    function toggleChat() {
        const chatWindow = document.getElementById('chatWindow');
        if (chatWindow.style.display === 'none' || chatWindow.style.display === '') {
            chatWindow.style.display = 'block';
        } else {
            chatWindow.style.display = 'none';
        }
    }
</script>
