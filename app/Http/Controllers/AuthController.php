<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use Auth;

class AuthController extends Controller
{
    /**
     * login page
     * @return 
     */
    public function login()
    {
    	return view('dashboard.auth.login'); 
    }

    /**
     * user authenticate & login
     * @param  UserLoginRequest $request
     * @return retun use lead page.
     */
    public function authenticate(UserLoginRequest $request)
    {
        try {

            $credentials = [
                'email' => $request->get('email'),
                'password' => $request->get('password'),
            ] ;
            
            # attempt to do the login
            if (Auth::attempt($credentials)) {
                # success message
                $message = trans('messages.user.login_successfully');
                return redirect()->route('users-leads')->with('success', $message);
            }
            
            $message = trans('messages.user.oops_missing');

            throw new \Exception($message, 404);

        } catch (\Exception $e) {
            # error message
            return redirect()->route('login')->with('error', $e->getMessage());
        }
    }

    /**
     * user logout
     * @return login page
     */
    public function logout()
    {
        Auth::logout(); // log the user out of our application
        # success message.
        $message = trans('messages.user.logout');
        return redirect()->route('login')->with('success', $message);
    }
}
