<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.contact');  // the form
    }

    public function store(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable',  // set a default password
        ]);

        // Store in database
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt('defaultpassword123'),  // set a default password
        ]);

        return redirect()->back()->with('success', 'User created successfully!');
    }
}
