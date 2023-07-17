<?php

namespace App\Http\Controllers;
use App\Models\User;
use DataTables;
use Exception;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Redirect;
use Session;

class UserController extends Controller
{
    //

    public function User_login(){
    	
        return view('user.login');
    	
    }
    public function user_checklogin(Request $request)
    {
        Validator::make($request->all(), [
            'email' => ['required', 'regex:/(.+)@(.+)\.(.+)/i', Rule::exists('users', 'email')->where(function ($query) {
                $query->where(['role' => 1]);
            })],
            'password' => 'required',
        ])->validate();

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role' => 1,
        );

        $remember = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember)) {
            $user = Auth::user()->toArray();
            if (count($user) > 0) {
                session()->put('userId', $user['id']);
                
                return redirect('/user_dashboard');
            }
        } else {
            return back()->with('error', __('Wrong Login Details'));
        }
    }


    public function user_dashboard(){

     	if($user = Auth::user() && Auth::user()->role == 1){
        
          return view('user.dashboard');
      }else{
          return redirect('/User_login');
      }
    
    }

   public function user_chat(){
   	if($user = Auth::user() && Auth::user()->role == 1){
        
          return view('user.chat');
      }else{
          return redirect('/User_login');
      }
   }
}