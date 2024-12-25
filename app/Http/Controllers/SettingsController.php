<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SettingsController extends Controller
{
    public function index()
    {
        return view('user.settings');
    }

    public function update(Request $request)
    {
        // Get user ID from auth
        $userId = Auth::id();
        
        // Find the user model instance
        $user = User::findOrFail($userId);
        
        // Validate the request
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'string', Password::defaults(), 'confirmed'],
            'password_confirmation' => ['nullable', 'same:password'],
        ]);

        // Update user data
        $user->name = $validated['name'];
        
        // Only update password if provided
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()
            ->back()
            ->with('status', 'Profile updated successfully.');
    }
}