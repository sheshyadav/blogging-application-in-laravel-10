<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo(){
        $userRole = Auth::user()->role->value;
        switch($userRole){
            case 1:
                return '/admin/dashboard';
                break;
            case 2:
                return '/admin/dashboard';
                break;
            case 3:
                return '/dashboard';
                break;
            default:
                return '/page-not-found';
                break;
        }
    }

    /**--- this function check the user status if status is 1 then allow login ---*/
    protected function authenticated(Request $request, $user){
        if ($user->status==0) {
            Auth::logout();
            return back()->with('error', 'Hi- '. $user->name . ' your account is currently inactive?');
        }
    }
}
