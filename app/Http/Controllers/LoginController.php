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

class LoginController extends Controller
{
    //

    public function index(){
    	$list_city = DB::select("CALL list_city_home()");
        $list_properties = DB::select("CALL list_prop()");
        $list_testimonial = DB::select("CALL list_testimonial_home()");
        return view('index', compact('list_city','list_properties','list_testimonial'));
    	
    }
    public function projects($name){
        $view_project = DB::select("CALL get_city_property(?)", array($name));
    //  print_r($view_project);exit;
        return view('projects', compact('view_project'));
    }
    
    public function project(){
        $list_properties = DB::select("CALL list_properties_home()");
        return view('project', compact('list_properties'));
    }
    
    public function details($slug){
        $view_property = DB::select("CALL get_property_details(?)", array($slug));
        //print_r($view_property);exit;
        $view_ammenities = DB::select("CALL list_ammenities");
        return view('details',compact('view_property','view_ammenities'));
    }
    
    public function send_msg(Request $request){
        {
           // dd($request->all());exit;
            $slug = $request->slug;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required',
            'message' => 'required',
            

        ]);
        if ($validator->fails()) {
            return redirect('/details' . '/' . $slug)
                ->withInput()
                ->withErrors($validator);
        } else {
            $name = $request->name;
            $contact = $request->contact;
            $email = $request->email;
            $message = $request->message;
            $property_id = $request->id;
            
            
            $add_msg = DB::select("CALL add_msg(?,?,?,?,?)", array($name, $contact,$email, $message,$property_id));
            return redirect('/details' . '/' . $slug)->with('status', ('Data Send successfully'));
        }
    }
    }
    public function contact(){
        
        return view('contact');
    }
    
    public function user_checklogin(Request $request)
    {   
        Validator::make($request->all(), [
            'email' => 'required',
          'password' =>'required',      
        ])->validate();

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password'),            
            'role' => 0,            
        );
        
        $remember=$request->has('remember_me') ? true : false;
        
         if(Auth::attempt(['email' => $request->input('email'),  'password' => $request->input('password')], $remember))
         {
            $user = Auth::user()->toArray();
            if(count($user)>0){
                return redirect('/dashboard');
            }
        }
         else
         {
          return back()->with('error', __('Wrong Login Details'));
         }
    }
}
