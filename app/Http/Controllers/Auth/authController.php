<?php

// Fixed namespace: Changed from App\Http\Controllers to App\Http\Controllers\Auth
// This matches the file location and allows the route to properly resolve the controller
namespace App\Http\Controllers\Auth;

// Added Controller base class import - required for extending Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class authController extends Controller
{
    /**
     * Display the admin login page
     */
    public function adminLogin()
    {
        return view('Auth.admin');
    }

    /**
     * Handle admin login authentication
     * Validates credentials and logs in the admin if valid
     */
    public function adminCheckLogin(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            Auth::guard('admin')->login($admin);

            return redirect()
                ->route('dashboard')
                ->with('success', 'Hello ' . $admin->name);
        }

        return redirect()
            ->back()
            ->with('error', 'invalid email or password');
    }

    /**
     * Handle admin logout
     * Logs out the admin, invalidates session, and redirects to home page (guest page)
     * Updated: Changed redirect from '/' to route('home.index') for consistency
     */
    public function logout(Request $request)
    {
        // Check if admin is logged in before attempting logout
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }

        // Invalidate and regenerate session for security
        $request->session()->invalidate();
        $request->session()->regenerate();

        // Redirect to home page (guest landing page) with success message
        return redirect()->route('home.index')->with('success', 'You have been logged out successfully.');
    }
}

