<x-guest-layout>
    <!-- Header Section -->
    <header class="bg-white shadow-md">
        @include('layouts.header2')
    </header>

    <!-- Centered Login Section -->
    <div class="bg-gray-100 min-h-screen flex items-center justify-center py-12">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full text-center mt-12">
            <h1 class="text-3xl font-bold mb-4">{{ __('Welcome Back!') }}</h1>
            <p class="mb-6">{{ __('Please login or sign up to continue.') }}</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-text-input
                        id="email"
                        class="border border-gray-300 p-3 rounded-full w-full"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        placeholder="Email"
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-text-input
                        id="password"
                        class="border border-gray-300 p-3 rounded-full w-full"
                        type="password"
                        name="password"
                        required
                        placeholder="Password"
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mb-4 text-left">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Login Button and Forgot Password Link -->
                <div class="mb-4">
                    <button class="bg-green-600 text-white py-3 px-6 rounded-full w-full" type="submit">{{ __('Login') }}</button>
                </div>

                <div class="text-sm text-gray-600 mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>

            <!-- Login with Google Button -->
            <div class="flex items-center justify-center my-6">
                <span class="text-sm text-gray-600">{{ __('Or login with') }}</span>
                <a href="{{ route('google.auth') }}" class="inline-flex items-center px-4 py-2 ml-2 bg-red-600 text-white rounded-full font-semibold text-xs uppercase tracking-widest hover:bg-red-500 transition ease-in-out duration-150">
                    {{ __('Google') }}
                </a>
            </div>

            <!-- Register Link -->
            <div class="mt-4">
                <p class="text-sm text-gray-600">{{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-green-600 hover:text-green-800 underline">
                        {{ __('Register here') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
