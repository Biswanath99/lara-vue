<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Admin;
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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    public function showLoginForm()
    {
      return view('auth.login');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:8'
      ]);
       
      //  $emailData    = Admin::first();
       $userPassword = Admin::where('email',$request->email)->first();

      // if($request->email != $emailData->email)
      // {
      //   return redirect()->intended(route('login'))->with('message','Incorrect email address!');
      // }

      if (!Hash::check($request->password,$userPassword->password)) 
      {
        return redirect()->intended(route('login'))->with('message','Incorrect Credentials!');
      }
      
      // Attempt to log the user in
      if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->intended(route('login'))->with('message','Authentication failure please try again!');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->intended(route('login'));
    }
   
}
