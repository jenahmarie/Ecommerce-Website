<x-guest-layout>
    <!-- Header Section -->
    <header class="bg-white shadow-md">
        @include('layouts.header2')
    </header>

    <!-- Centered Registration Section -->
    <div class="bg-gray-100 min-h-screen flex items-center justify-center py-12">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full mt-12">
            <h1 class="text-3xl font-bold mb-4 text-center">{{ __('Join Us!') }}</h1>
            <p class="mb-6 text-center">{{ __('Create an account to get started.') }}</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- First Name -->
                <div class="mb-4 text-left">
                    <x-input-label for="fname" :value="__('First Name')" class="text-gray-700 font-semibold" />
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fas fa-user"></i>
                        </span>
                        <x-text-input id="fname" class="border border-gray-300 p-3 rounded-full w-full pl-10" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" placeholder="First Name" />
                    </div>
                    <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="mb-4 text-left">
                    <x-input-label for="lname" :value="__('Last Name')" class="text-gray-700 font-semibold" />
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fas fa-user"></i>
                        </span>
                        <x-text-input id="lname" class="border border-gray-300 p-3 rounded-full w-full pl-10" type="text" name="lname" :value="old('lname')" required autocomplete="lname" placeholder="Last Name" />
                    </div>
                    <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-4 text-left">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold" />
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <x-text-input id="email" class="border border-gray-300 p-3 rounded-full w-full pl-10" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4 text-left">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fas fa-lock"></i>
                        </span>
                        <x-text-input id="password" class="border border-gray-300 p-3 rounded-full w-full pl-10" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4 text-left">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 font-semibold" />
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fas fa-lock"></i>
                        </span>
                        <x-text-input id="password_confirmation" class="border border-gray-300 p-3 rounded-full w-full pl-10" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <div class="mb-4">
                    <button type="submit" class="bg-green-600 text-white py-3 px-6 rounded-full w-full hover:bg-green-700 transition-colors duration-200">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

            <!-- Already Registered Link -->
            <div class="mt-4 text-center">
                <p class="text-sm text-gray-600">{{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="text-green-600 hover:text-green-800 underline">
                        {{ __('Login here') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
