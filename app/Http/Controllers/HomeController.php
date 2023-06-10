<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('AMS.frontend.home.index');
    }


    public function loginForm()
    {
        return view('AMS.frontend.login.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {

            // Authentication was successful...
            if (Auth::user()->role->name == 'admin') {
                Auth::user()->status = "online";
                Auth::user()->save();
                /* save last_activity into session */
                $request->session()->regenerate();
                $request->session()->put(Auth::id() . '_last_activity', now());
                return redirect()->intended(route('admin.dashboard.index'));
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        // remove last_activity from session
        $request->session()->forget(Auth::id() . "_last_activity");
        // set the user's status to offline
        Auth::user()->status = "offline";
        Auth::user()->save();
        //regenerate   session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // logout the user
        Auth::logout();

        return redirect()->route('home.index');
    }
}
