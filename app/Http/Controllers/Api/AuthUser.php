<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUser extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role->name == 'user') {
                Auth::user()->status = "online";
                Auth::user()->save();
                $user = Auth::user();
                // Return a success response or generate a token as needed
                return response()->json(['message' => 'Login successful', 'user' => $user, 'points' => $user->client->recordCount()]);
            }
            // Return an error response for invalid credentials
            return response()->json(['message' => 'Invalid role'], 401);
        } else {
            // Return an error response for invalid credentials
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
    public function logout(Request $request,$id)
    {

        $user = User::find($id);
        $user->update(['status' => 'offline']);
        return response()->json(['message' => 'Logout successful']);
    }
}
