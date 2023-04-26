<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->redirectTo = route('welcome'); // Set the default redirect to landing page
    }
 
    protected function authenticated()
    {
        $user = Auth::user();
        $adminRole = Role::where('name', 'admin')->first();

        if ($user->hasRole('admin')) {
            $this->redirectTo = RouteServiceProvider::DASHBOARD; // Redirect to dashboard if the user has "admin" role
        }

        return redirect()->intended($this->redirectTo); // Redirect the user to the appropriate page
    }
}
