<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = 'dashboard';
    protected $username = 'fund';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    protected function sendFailedLoginResponse(Request $request)
{
    if ($request->ajax()) {
        return response()->json([
            'error' => Lang::get('auth.failed')
        ], 401);
    }

    return redirect()->back()
        ->withInput($request->only($this->username(), 'remember'))
        ->withErrors([
            $this->username() => Lang::get('auth.failed'),
        ]);
}
}
