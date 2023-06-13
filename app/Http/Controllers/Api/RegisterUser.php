<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUser extends Controller
{
    public function register(Request $request)
    {

        try {
            // Create a new user record
            Clients::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'company' => $request['company'],
                'address' => $request['address'],
                'number' => $request['number'],
            ]);
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'status' => 'offline',
                'role_id' => 2,
            ]);

            return response()->json(['message' => 'User Registered successfully']);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }
    }
}
