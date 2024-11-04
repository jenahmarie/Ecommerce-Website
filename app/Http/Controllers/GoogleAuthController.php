<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Import the Log facade
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginNotification; // Import your mailable class
use App\Models\User;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            // Get the Google user
            $googleUser = Socialite::driver('google')->user();

            // Check if the user already exists in the database
            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                // Split the Google user's name into first and last name parts
                $nameParts = explode(' ', $googleUser->getName(), 2);
                $firstName = $nameParts[0] ?? $googleUser->getName();
                $lastName = $nameParts[1] ?? '';

                // Create a new user if one doesn't exist
                $newUser = User::create([
                    'FirstName' => $firstName,
                    'LastName' => $lastName,
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    // You can set a default password or keep it null
                ]);

                Auth::login($newUser);

                // Send email notification
                Mail::to($newUser->email)->send(new LoginNotification($newUser));
            } else {
                // Log in the existing user
                Auth::login($user);

                // Send email notification
                Mail::to($user->email)->send(new LoginNotification($user));
            }

            // Redirect to the intended page or homepage
            return redirect()->intended('homepage');

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Google login error: ' . $e->getMessage());
            return redirect('/login')->with('error', 'Login failed. Please try again.');
        }
    }
}
