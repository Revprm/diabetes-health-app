<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of users
     */
    public function index()
    {
        $users = User::all();
        return view('admin.userManagement', compact('users'));
    }

    /**
     * Store a newly created user
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_admin' => 'nullable|boolean',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => $validated['is_admin'], // Set based on checkbox
        ]);

        return redirect()->route('admin.userManagement')
            ->with('success', 'User created successfully');
    }

    /**
     * Update the specified user
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'password_confirmation' => 'nullable',
            'is_admin' => 'nullable|boolean',
        ]);
    
        $user->name = $validated['name'];
        $user->email = $validated['email'];
    
        if ($request->filled('password')) {
            $user->password = Hash::make($validated['password']);
        }
    
        $user->is_admin = $validated['is_admin'];
        $user->save();
    
        return redirect()->route('admin.userManagement')
            ->with('success', 'User updated successfully');
    }
    

    /**
     * Remove the specified user
     */
    public function destroy(User $user)
    {
        if (Auth::id() === $user->id) {
            return redirect()->route('admin.userManagement')
                ->with('error', 'You cannot delete your own account');
        }

        $user->delete();

        return redirect()->route('admin.userManagement')
            ->with('success', 'User deleted successfully');
    }
}
