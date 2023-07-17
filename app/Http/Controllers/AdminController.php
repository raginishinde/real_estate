<?php

namespace App\Http\Controllers;

use App\Models\User;
use DataTables;
use Exception;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {}
    //
    public function admin()
    {

        return view('admin.login');
    }
    /*----------------- Authentication ------------------*/
    /* *
     * function name checklogin
     * This function is used for admin login
     * Created Date - 07-07-2023
     * */
    public function checklogin(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ])->validate();

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        );

        $remember = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember)) {
            $user = Auth::user()->toArray();
            if (count($user) > 0) {
                return redirect('/dashboard');
            }
        } else {
            return back()->with('error', __('Wrong Login Details'));
        }
    }
    public function dashboard()
    {

        return view('admin.dashboard');
    }
    public function testimonial()
    {

        return view('admin.testimonial');
    }
    public function create_testimonial(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'description' => 'required',
            'status' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect('/testimonial')
                ->withInput()
                ->withErrors($validator);
        } else {
            $fname = $request->fname;
            $lname = $request->lname;
            $designation = $request->designation;
            $description = $request->description;
            $profile_img = $request->file('image');
            $status = $request->status;
            //print_r($profile_img);exit;
            $imageName = "";
            if ($profile_img != '') {
                $destinationPath = 'public/admin/assets/storeImages/testimonials'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                $profile_img->move($destinationPath, $imageName);
            }
            //print_r($imageName);exit;
            $add_testimonial = DB::select("CALL add_testimonial(?,?,?,?,?,?)", array($fname, $lname, $designation, $description, $imageName, $status));
            return redirect('testimonial_view')->with('status', ('Testimonial created successfully'));
        }
    }

    public function testimonial_view(Request $request)
    {
        if ($request->ajax()) {
            $list_testimonial = DB::select("CALL list_testimonial()");
            return DataTables::of($list_testimonial)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })
                ->addColumn('image', function ($row) {
                    return '<div class="text-center tbl-img"><img name="imgPreview" style="height: auto;width: 100px;border-radius:0%;" src="' . url("public/admin/assets/storeImages/testimonials/" . $row->image) . '" ></div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editTestimonial/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn cust_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.testimonial_view');

    }

    public function editTestimonial($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_testi = DB::select("CALL view_testimonial(" . $id . ")");
            return view('admin.editTestimonial', compact('view_testi'));
        } else {
            return redirect('admin');
        }
    }

    public function update_testimonial(Request $request)
    {
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'description' => 'required',
            'status' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect('/editTestimonial' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
        } else {
            $fname = $request->fname;
            $lname = $request->lname;
            $designation = $request->designation;
            $description = $request->description;
            $profile_img = $request->file('image');
            $status = $request->status;

            if ($profile_img != "") {
                $destinationPath = 'public/admin/assets/storeImages/testimonials'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $profile_img->move($destinationPath, $imageName);
            } else {
                $imageName = $request->input('oldimage');
            }

            $update_testimonial = DB::select("CALL update_testimonial(?,?,?,?,?,?,?)", array($id, $fname, $lname, $designation, $description, $imageName, $status));
            return redirect('testimonial_view')->with('status', ('Testimonial updated successfully'));
        }
    }

    public function delete_testimonial($id)
    {
        try
        {
            $delete = DB::select("CALL delete_testimonial(?,?)", array($id, 1));
            return redirect('testimonial_view')->with('status', __('Testimonial removed successfully'));
        } catch (Exception $e) {
            return redirect('testimonial_view')->with('failed', __('operation failed'));
        }
    }

    public function city()
    {

        return view('admin.city');
    }
    public function create_city(Request $request)
    {
        // print_r($request->all());exit;
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z]+$/u|min:3|max:255',
            'image' => 'required',
            'status' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect('/city')
                ->withInput()
                ->withErrors($validator);
        } else {
            $name = $request->name;
            $profile_img = $request->file('image');
            $status = $request->status;
            //print_r($profile_img);exit;
            $imageName = "";
            if ($profile_img != '') {
                $destinationPath = 'public/admin/assets/storeImages/cities'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                $profile_img->move($destinationPath, $imageName);
            }
            //print_r($imageName);exit;
            $add_city = DB::select("CALL add_city(?,?,?)", array($name, $imageName, $status));
            return redirect('city_view')->with('status', ('City created successfully'));
        }
    }

    public function city_view(Request $request)
    {
        if ($request->ajax()) {
            $list_city = DB::select("CALL list_city()");
            //print_r($list_city);exit;
            return DataTables::of($list_city)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })
                ->addColumn('image', function ($row) {
                    return '<div class="text-center tbl-img"><img name="imgPreview" style="height: auto;width: 100px;border-radius:0%;" src="' . url("public/admin/assets/storeImages/cities/" . $row->image) . '" ></div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editCity/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn city_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.city_view');

    }

    public function editCity($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_city = DB::select("CALL view_city(" . $id . ")");
            return view('admin.editCity', compact('view_city'));
        } else {
            return redirect('admin');
        }
    }

    public function update_city(Request $request)
    {
        //print_r($request->all());exit;
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z]+$/u|min:3|max:255',

            'status' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect('/editCity' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
            // echo "bye";exit;
        } else {
            //echo "hii";exit;
            $name = $request->name;
            $profile_img = $request->file('image');
            $status = $request->status;

            if ($profile_img != "") {
                $destinationPath = 'public/admin/assets/storeImages/cities'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $profile_img->move($destinationPath, $imageName);
            } else {
                $imageName = $request->input('oldimage');
            }

            // print_r($imageName);exit;
            $update_city = DB::select("CALL update_city(?,?,?,?)", array($id, $name, $imageName, $status));
            return redirect('city_view')->with('status', ('City updated successfully'));
        }
    }

    public function delete_city($id)
    {
        try
        {
            $delete = DB::select("CALL delete_city(?,?)", array($id, 1));
            return redirect('city_view')->with('status', __('City removed successfully'));
        } catch (Exception $e) {
            return redirect('city_view')->with('failed', __('operation failed'));
        }
    }

    public function ammenities()
    {

        return view('admin.ammenities');
    }
    public function create_ammenities(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect('/ammenities')
                ->withInput()
                ->withErrors($validator);
        } else {
            $name = $request->name;
            $status = $request->status;
            //print_r($profile_img);exit;

            $add_ammenities = DB::select("CALL add_ammenities(?,?)", array($name, $status));
            return redirect('ammenities_view')->with('status', ('Ammenities created successfully'));
        }
    }

    public function ammenities_view(Request $request)
    {
        if ($request->ajax()) {
            $list_ammenities = DB::select("CALL list_ammenities()");
            return DataTables::of($list_ammenities)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })

                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editAmmenities/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn ammenities_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('admin.ammenities_view');

    }

    public function editAmmenities($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_ammenities = DB::select("CALL view_ammenities(" . $id . ")");
            return view('admin.editAmmenities', compact('view_ammenities'));
        } else {
            return redirect('admin');
        }
    }
    public function update_ammenities(Request $request)
    {
        //print_r($request->all());exit;
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z]+$/u|min:3|max:255',
            'status' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect('/editAmmenities' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
            // echo "bye";exit;
        } else {
            //echo "hii";exit;
            $name = $request->name;
            $status = $request->status;

            // print_r($imageName);exit;
            $update_city = DB::select("CALL update_ammenities(?,?,?)", array($id, $name, $status));
            return redirect('ammenities_view')->with('status', ('Ammenities updated successfully'));
        }
    }

    public function delete_ammenities($id)
    {
        try
        {
            $delete = DB::select("CALL delete_ammenities(?,?)", array($id, 1));
            return redirect('ammenities_view')->with('status', ('Ammenities removed successfully'));
        } catch (Exception $e) {
            return redirect('ammenities_view')->with('failed', ('operation failed'));
        }
    }
    public function property()
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_ammenities = DB::select("CALL list_ammenities");
            $list_city = DB::select("CALL list_city()");
            return view('admin.property', compact('view_ammenities', 'list_city'));
        } else {
            return redirect('admin');
        }
    }

    public function create_property(Request $request)
    {
        // print_r($request->all());exit;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'ammenities' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect('/property')
                ->withInput()
                ->withErrors($validator);
        } else {
            $property_id = $request->property_id;
            $name = $request->name;
            $slug = str_replace(" ", "-", $request->name);
            $address = $request->address;
            $city = $request->city;
            $ammenities = implode(', ', $request->ammenities);
            $image = $request->file('image');
            $left_image = $request->file('left_image');
            $right_image = $request->file('right_image');
            $front_image = $request->file('front_image');
            $back_image = $request->file('back_image');
            $description = $request->description;
            $status = $request->status;
            //print_r($profile_img);exit;

            $imageName = "";
            if ($image != '') {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
            }

            $imageName1 = "";
            if ($left_image != '') {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName1 = "left" . date('Ymd') . "." . $left_image->getClientOriginalExtension();
                $left_image->move($destinationPath, $imageName1);
            }

            $imageName2 = "";
            if ($right_image != '') {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName2 = "right" . date('His') . "." . $right_image->getClientOriginalExtension();
                $right_image->move($destinationPath, $imageName2);
            }

            $imageName3 = "";
            if ($front_image != '') {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName3 = "front" . date('YmdHis') . "." . $front_image->getClientOriginalExtension();
                $front_image->move($destinationPath, $imageName3);
            }

            $imageName4 = "";
            if ($back_image != '') {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName4 = "back" . date('YmdHis') . "." . $back_image->getClientOriginalExtension();
                $back_image->move($destinationPath, $imageName4);
            }

            $add_property = DB::select("CALL add_property(?,?,?,?,?,?,?,?,?,?,?,?)", array($property_id, $name, $slug, $address, $city, $ammenities, $imageName, $imageName1, $imageName2, $imageName3, $imageName4, $description));
            return redirect('property_view')->with('status', ('Property created successfully'));
        }
    }
    public function property_view(Request $request)
    {
        if ($request->ajax()) {
            $list_properties = DB::select("CALL list_properties()");
            return DataTables::of($list_properties)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })
                ->addColumn('image', function ($row) {
                    return '<div class="text-center tbl-img"><img name="imgPreview" style="height: auto;width: 100px;border-radius:0%;" src="' . url("public/admin/assets/storeImages/property/" . $row->image) . '" ></div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editProperty/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn property_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.property_view');

    }
    public function delete_property($id)
    {
        try
        {
            $delete = DB::select("CALL delete_property(?,?)", array($id, 1));
            return redirect('property_view')->with('status', ('Property removed successfully'));
        } catch (Exception $e) {
            return redirect('property_view')->with('failed', ('operation failed'));
        }
    }
    public function editProperty($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_property = DB::select("CALL view_property(" . $id . ")");
            $view_ammenities = DB::select("CALL list_ammenities");
            $list_city = DB::select("CALL list_city()");
            return view('admin.editProperty', compact('view_property', 'view_ammenities', 'list_city'));
        } else {
            return redirect('admin');
        }
    }

    public function update_property(Request $request)
    {
        // print_r($request->all());exit;
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'ammenities' => 'required',
            'description' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect('/editProperty' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
            // echo "bye";exit;
        } else {
            //echo "hii";exit;
            $property_id = $request->property_id;
            $name = $request->name;
            $slug = str_replace(" ", "-", $request->name);
            $address = $request->address;
            $city = $request->city;
            $ammenities = implode(', ', $request->ammenities);
            $image = $request->file('image');
            $left_image = $request->file('left_image');
            $right_image = $request->file('right_image');
            $front_image = $request->file('front_image');
            $back_image = $request->file('back_image');
            $description = $request->description;
            $status = $request->status;

            if ($image != "") {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $image->move($destinationPath, $imageName);
            } else {
                $imageName = $request->input('oldimage');
            }

            if ($left_image != "") {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName1 = date('YmdHis') . "." . $left_image->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $left_image->move($destinationPath, $imageName1);
            } else {
                $imageName1 = $request->input('oldimage1');
            }

            if ($right_image != "") {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName2 = date('YmdHis') . "." . $right_image->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $right_image->move($destinationPath, $imageName2);
            } else {
                $imageName2 = $request->input('oldimage2');
            }

            if ($front_image != "") {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName3 = date('YmdHis') . "." . $front_image->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $front_image->move($destinationPath, $imageName3);
            } else {
                $imageName3 = $request->input('oldimage3');
            }

            if ($back_image != "") {
                $destinationPath = 'public/admin/assets/storeImages/property'; // upload path
                $imageName4 = date('YmdHis') . "." . $back_image->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $back_image->move($destinationPath, $imageName4);
            } else {
                $imageName4 = $request->input('oldimage4');
            }

            // print_r($imageName);exit;
            $update_property = DB::select("CALL update_property(?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($id, $property_id, $name, $slug, $address, $city, $ammenities, $imageName, $imageName1, $imageName2, $imageName3, $imageName4, $description, $status));

            return redirect('property_view')->with('status', ('Property updated successfully'));
        }
    }

    public function blog()
    {
        return view('admin.blog');
    }
    public function create_blog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect('/blog')
                ->withInput()
                ->withErrors($validator);
        } else {
            $title = $request->title;
            $slug = str_replace([" ", ".", "'", "&", ":", ";"], "-", $request->title);
            $description = $request->description;
            $profile_img = $request->file('image');
            $status = $request->status;
            //print_r($profile_img);exit;
            $imageName = "";
            if ($profile_img != '') {
                $destinationPath = 'public/admin/assets/storeImages/blog'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                $profile_img->move($destinationPath, $imageName);
            }
            //print_r($imageName);exit;
            $add_blog = DB::select("CALL add_blog(?,?,?,?,?)", array($title, $slug, $description, $imageName, $status));
            return redirect('blog_view')->with('status', ('Blog created successfully'));
        }
    }

    public function blog_view(Request $request)
    {
        if ($request->ajax()) {
            $list_blog = DB::select("CALL list_blog()");
            return DataTables::of($list_blog)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })
                ->addColumn('image', function ($row) {
                    return '<div class="text-center tbl-img"><img name="imgPreview" style="height: auto;width: 100px;border-radius:0%;" src="' . url("public/admin/assets/storeImages/blog/" . $row->image) . '" ></div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editBlog/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn blog_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.blog_view');

    }

    public function editBlog($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_blog = DB::select("CALL view_blog(" . $id . ")");
            return view('admin.editBlog', compact('view_blog'));
        } else {
            return redirect('admin');
        }
    }

    public function update_blog(Request $request)
    {
        //print_r($request->all());exit;
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',

            'status' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect('/editBlog' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
        } else {
            $title = $request->title;
            $slug = str_replace([" ", ".", "'", "&", ":", ";"], "-", $request->title);
            $description = $request->description;
            $profile_img = $request->file('image');
            $status = $request->status;

            if ($profile_img != "") {
                $destinationPath = 'public/admin/assets/storeImages/blog'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $profile_img->move($destinationPath, $imageName);
            } else {
                $imageName = $request->input('oldimage');
            }

            $update_blog = DB::select("CALL update_blog(?,?,?,?,?,?)", array($id, $title, $slug, $description, $imageName, $status));
            return redirect('blog_view')->with('status', ('Blog updated successfully'));
        }
    }

    public function delete_blog($id)
    {
        try
        {
            $delete = DB::select("CALL delete_blog(?,?)", array($id, 1));
            return redirect('blog_view')->with('status', __('Blog removed successfully'));
        } catch (Exception $e) {
            return redirect('blog_view')->with('failed', __('operation failed'));
        }
    }

    public function slider()
    {
        return view('admin.slider');
    }
    public function create_slider(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'status' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect('/slider')
                ->withInput()
                ->withErrors($validator);
        } else {
            $profile_img = $request->file('image');
            $status = $request->status;
            //print_r($profile_img);exit;
            $imageName = "";
            if ($profile_img != '') {
                $destinationPath = 'public/admin/assets/storeImages/slider'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                $profile_img->move($destinationPath, $imageName);
            }
            //print_r($imageName);exit;
            $add_slider = DB::select("CALL add_slider(?,?)", array($imageName, $status));
            return redirect('slider_view')->with('status', ('Slider created successfully'));
        }
    }
    public function slider_view(Request $request)
    {
        if ($request->ajax()) {
            $list_slider = DB::select("CALL list_slider()");
            return DataTables::of($list_slider)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })
                ->addColumn('image', function ($row) {
                    return '<div class="text-center tbl-img"><img name="imgPreview" style="height: auto;width: 100px;border-radius:0%;" src="' . url("public/admin/assets/storeImages/slider/" . $row->image) . '" ></div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editSlider/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn slider_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.slider_view');

    }

    public function editSlider($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_slider = DB::select("CALL view_slider(" . $id . ")");
            return view('admin.editSlider', compact('view_slider'));
        } else {
            return redirect('admin');
        }
    }
    public function update_slider(Request $request)
    {
        //print_r($request->all());exit;
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'status' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect('/editSlider' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
        } else {
            $profile_img = $request->file('image');
            $status = $request->status;

            if ($profile_img != "") {
                $destinationPath = 'public/admin/assets/storeImages/slider'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $profile_img->move($destinationPath, $imageName);
            } else {
                $imageName = $request->input('oldimage');
            }

            $update_slider = DB::select("CALL update_slider(?,?,?)", array($id, $imageName, $status));
            return redirect('slider_view')->with('status', ('Slider updated successfully'));
        }
    }

    public function delete_slider($id)
    {
        try
        {
            $delete = DB::select("CALL delete_slider(?,?)", array($id, 1));
            return redirect('slider_view')->with('status', __('Slider removed successfully'));
        } catch (Exception $e) {
            return redirect('slider_view')->with('failed', __('operation failed'));
        }
    }

    public function admin_gallery()
    {
        return view('admin.gallery');
    }
    public function create_gallery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'status' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect('/gallery')
                ->withInput()
                ->withErrors($validator);
        } else {
            $profile_img = $request->file('image');
            $status = $request->status;
            //print_r($profile_img);exit;
            $imageName = "";
            if ($profile_img != '') {
                $destinationPath = 'public/admin/assets/storeImages/gallery'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                $profile_img->move($destinationPath, $imageName);
            }
            //print_r($imageName);exit;
            $add_gallery = DB::select("CALL add_gallery(?,?)", array($imageName, $status));
            return redirect('gallery_view')->with('status', ('Gallery created successfully'));
        }
    }
    public function gallery_view(Request $request)
    {
        if ($request->ajax()) {
            $list_gallery = DB::select("CALL list_gallery()");
            return DataTables::of($list_gallery)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })
                ->addColumn('image', function ($row) {
                    return '<div class="text-center tbl-img"><img name="imgPreview" style="height: auto;width: 100px;border-radius:0%;" src="' . url("public/admin/assets/storeImages/gallery/" . $row->image) . '" ></div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editGallery/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn gallery_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.gallery_view');

    }

    public function editGallery($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_gallery = DB::select("CALL view_gallery(" . $id . ")");
            return view('admin.editGallery', compact('view_gallery'));
        } else {
            return redirect('admin');
        }
    }
    public function update_gallery(Request $request)
    {
        //print_r($request->all());exit;
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'status' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect('/editGallery' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
        } else {
            $profile_img = $request->file('image');
            $status = $request->status;

            if ($profile_img != "") {
                $destinationPath = 'public/admin/assets/storeImages/gallery'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $profile_img->move($destinationPath, $imageName);
            } else {
                $imageName = $request->input('oldimage');
            }

            $update_gallery = DB::select("CALL update_gallery(?,?,?)", array($id, $imageName, $status));
            return redirect('gallery_view')->with('status', ('Gallery updated successfully'));
        }
    }

    public function delete_gallery($id)
    {
        try
        {
            $delete = DB::select("CALL delete_gallery(?,?)", array($id, 1));
            return redirect('gallery_view')->with('status', __('Gallery removed successfully'));
        } catch (Exception $e) {
            return redirect('gallery_view')->with('failed', __('operation failed'));
        }
    }
    public function user()
    {

        return view('admin.user');
    }
    public function create_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'contact' => 'required|numeric',
            'address' => 'required',
            'status' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect('/user')
                ->withInput()
                ->withErrors($validator);
        } else {
            $fname = $request->fname;
            $lname = $request->lname;
            $email = $request->email;
            $contact = $request->contact;
            $address = $request->address;
            $profile_img = $request->file('image');
            $status = $request->status;
            //print_r($profile_img);exit;
            $imageName = "";
            if ($profile_img != '') {
                $destinationPath = 'public/admin/assets/storeImages/users'; // upload path
                $imageName = date('YmdHis') . "." . $profile_img->getClientOriginalExtension();
                $profile_img->move($destinationPath, $imageName);
            }
            //print_r($imageName);exit;
            $add_testimonial = DB::select("CALL add_user(?,?,?,?,?,?,?)", array($fname, $lname, $email, $contact, $address, $imageName, $status));
            return redirect('user_view')->with('status', ('User created successfully'));
        }
    }
    public function user_view(Request $request)
    {
        if ($request->ajax()) {
            $list_user = DB::select("CALL list_user()");
            return DataTables::of($list_user)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })
                ->addColumn('image', function ($row) {
                    return '<div class="text-center tbl-img"><img name="imgPreview" style="height: auto;width: 100px;border-radius:0%;" src="' . url("public/admin/assets/storeImages/users/" . $row->image) . '" ></div>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editUser/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn user_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.user_view');

    }
    public function delete_user($id)
    {
        try
        {
            $delete = DB::select("CALL delete_user(?,?)", array($id, 1));
            return redirect('user_view')->with('status', ('User removed successfully'));
        } catch (Exception $e) {
            return redirect('user_view')->with('failed', ('operation failed'));
        }
    }

    public function editUser($id)
    {
        if ($user = Auth::user() && Auth::user()->role == 0) {
            $view_user = DB::select("CALL view_user(" . $id . ")");
            // print_r($view_user);exit;
            return view('admin.editUser', compact('view_user'));
        } else {
            return redirect('admin');
        }
    }

    public function update_user(Request $request)
    {
        //print_r($request->all());exit;
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'contact' => 'required|numeric',
            'address' => 'required',
            'status' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect('/editUser' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
            // echo "bye";exit;
        } else {
            //echo "hii";exit;
            $fname = $request->fname;
            $lname = $request->lname;
            $email = $request->email;
            $contact = $request->contact;
            $address = $request->address;
            $image = $request->file('image');
            $status = $request->status;

            if ($image != "") {
                $destinationPath = 'public/admin/assets/storeImages/users'; // upload path
                $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                // unlink($destinationPath.$request->oldimage);
                $image->move($destinationPath, $imageName);
            } else {
                $imageName = $request->input('oldimage');
            }
            // print_r($imageName);exit;
            $update_user = DB::select("CALL update_user(?,?,?,?,?,?,?,?)", array($id, $fname, $lname, $email, $contact, $address, $imageName, $status));
            return redirect('user_view')->with('status', ('User updated successfully'));
        }
    }

    public function chat(Request $request)
    {
        $list_users = DB::select("CALL list_user()");
        $list_groups = DB::select("CALL list_groups()");

        $chat_list_users = array();
        foreach ($list_users as $list_user) {
            $user = array();
            $user['id'] = $list_user->id;
            $user['type'] = "single";
            $user['name'] = $list_user->fname . " " . $list_user->lname;
            $user['members'] = "";
            $chat_list_users[] = $user;
        }

        $chat_list_groups = array();
        foreach ($list_groups as $list_group) {
            $group = array();
            $group['id'] = $list_group->id;
            $group['type'] = "group";
            $group['name'] = $list_group->grp_name;
            $group['members'] = $list_group->member_ids;
            $chat_list_groups[] = $group;
        }

        $chat_list = array_merge($chat_list_users, $chat_list_groups);
        //dd($chat_list);

        return view('admin.chat', compact('chat_list'));
    }
    public function GetMessages(Request $request)
    {
        $id = $request->input('id');
        $type = $request->input('type');

        $get_id = '1';
        // print_r($get_id);exit;
        $session_username = 'Admin';
        //$session_id = Session::get('id');
        //echo $session_id;exit;

        if ($type == 'single') {
            $user = DB::table('customer')->where('id', $id)->first();
            $inbox = DB::table('messages')
                ->where('sent_to_id', $get_id) //senderid
                ->where('sender_id', $id); //sendtoid
            //->where('role','=','1');
            //->get();

            $sent = DB::table('messages')
                ->where('sender_id', $get_id) //senderid
                ->where('sent_to_id', $id) //sendtoid
            //->where('role','=','2')
                ->union($inbox)
                ->orderBy('id', 'asc')
                ->get();

            $msgdata = $sent;
            //$msgdata['image']=$img;
            $read = DB::table('messages')->where('sender_id', $id)->update(['is_read' => '1']);
            if ($msgdata) {
                $output = "";
                $output .= "<div class='topdiv'><h5>" . $session_username . "</h5></div>";
                foreach ($msgdata as $msgs) {
                    $current = date("d-m-Y");
                    $mdate = date('d-m-Y', strtotime($msgs->created_at));
                    if ($mdate == $current) {
                        $date = 'Today';
                        $time = date('g:i a', strtotime($msgs->created_at));
                    } else {
                        $date = $mdate;
                        $time = date('g:i a', strtotime($msgs->created_at));
                    }
                    $f = $user->fname;
                    $l = $user->lname;

                    if ($msgs->sender_id == $get_id) {
                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        } else {
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        }
                    } else {
                        // $output.= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><span style='color:#555d88;''>{$f[0]} {$l[0]}</span></div>  </div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";

                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><img src='{$img}' class='' id='wizardPicturePreview' title=''></div></div><div class='received_msg'><div class='received_withd_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        } else {
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''></div></div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        }

                    }

                }

                return response()->json($output);
            }
        } else {
            //for group start
            $group = DB::table('groups')->where('id', $id)->first();

            $inbox = DB::select("CALL get_admin_messages(?,?,?)", array($type, $get_id, $id));

            // $inbox = DB::table('messages')
            //     ->where('sent_to_id', $get_id) //senderid
            //     ->where('sender_id', $id); //sendtoid
            //->where('role','=','1');
            //->get();
            

            // $sent = DB::table('messages')
            //     ->where('sender_id', $get_id) //senderid
            //     ->where('sent_to_id', $id) //sendtoid
            // //->where('role','=','2')
            //     ->union($inbox)
            //     ->orderBy('id', 'asc')
            //     ->get();
                $sent = DB::select("CALL get_admin_messages(?,?,?)", array($type, $get_id, $id));
                

            $msgdata = $sent;
            //$msgdata['image']=$img;
            $read = DB::table('messages')->where('sender_id', $id)->update(['is_read' => '1']);
            if ($msgdata) {
                $output = "";
                $output .= "<div class='topdiv'><h5>" . $session_username . "</h5></div>";
                
                foreach ($msgdata as $msgs) {
                    $current = date("d-m-Y");
                    $mdate = date('d-m-Y', strtotime($msgs->created_at));
                    
                    if ($mdate == $current) {
                        $date = 'Today';
                        $time = date('g:i a', strtotime($msgs->created_at));
                    } else {
                        $date = $mdate;
                        $time = date('g:i a', strtotime($msgs->created_at));
                    }
                    $f = $group->grp_name;
                    $l ="";
                    

                    if ($msgs->sender_id == $get_id) {
                        
                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        } else {
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        }
                    } else {
                        // $output.= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><span style='color:#555d88;''>{$f[0]} {$l[0]}</span></div>  </div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";

                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><img src='{$img}' class='' id='wizardPicturePreview' title=''></div></div><div class='received_msg'><div class='received_withd_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        } else {
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''></div></div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        }

                    }

                }
                //dd($output);exit;
                return response()->json($output);
            }
            //for group end
        }

    }

    public function SendMessages(Request $request)
    {

        $text = $request->input('text');
        $data_id = '1';
        $id = $request->input('id');
        $type = $request->input('type');
        // print_r($data_id); echo "<pre>"; print_r($id); echo"<pre>";

        $sent_to_id = $id;
        $sender_id = $data_id;
        $body = $text;

        $add_mssg = DB::select("CALL add_user_comment(?,?,?,?)", array($type, $sent_to_id, $sender_id, $body));
        return response()->json('success');
    }

    public function add_user_comment(Request $request)
    {
        $session_username = Session::get('username');
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);
        $id = $request->id;
        if ($validator->fails()) {
            return redirect('/admin/chat' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
        } else {
            $id = $request->input('id');
            $comment = $request->input('comment');
            $username = $session_username;
            $assign_to = $request->input('assign_to');
            $ticket_id = $request->input('ticket_id');
            $update_user = DB::select("CALL add_user_comment(?,?,?,?)", array($comment, $username, $assign_to, $ticket_id));
        }
        return redirect('get_ticket')->with('status', ('Comment created successfully'));
    }
    public function getAccessories()
    {
        $accessories = array();
        $get_accessories = DB::select("CALL list_user()");
        // print_r($get_accessories);exit;
        if ($get_accessories) {
            foreach ($get_accessories as $get_accessorie) {
                $accessorie = array();
                $accessorie['id'] = $get_accessorie->id;
                $accessorie['fname'] = $get_accessorie->fname;
                $accessorie['lname'] = $get_accessorie->lname;
                $accessories[] = $accessorie;
            }

            $data['message'] = 'Accessories Fetched Successfully';
            $data['status'] = "success";
            $data['data'] = $accessories;
        } else {
            $data['message'] = 'Unable to Fetch Accessories';
            $data['status'] = "fail";
            $data['data'] = [];
        }
        return response()->json($data);
    }

    public function chat_model()
    {
        $list_user = DB::select("CALL list_user()");
        return view('admin.chat-model', compact('list_user'));
    }
    public function create_group(Request $request)
    {
        // print_r($request->all());exit;
        $validator = Validator::make($request->all(), [
            'grp_name' => 'required',
            'members' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/chat_model')
                ->withInput()
                ->withErrors($validator);
        } else {

            $grp_name = $request->grp_name;
            $members = implode(', ', $request->members);

            $add_group = DB::select("CALL add_group(?,?)", array($grp_name, $members));
            return redirect('group_view')->with('status', ('Group created successfully'));
        }
    }

    public function group_view(Request $request)
    {
        if ($request->ajax()) {
            $list_group = DB::select("CALL list_group()");
            return DataTables::of($list_group)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == "1") {
                        return '<button type="button" class="btn tealblue-color fw-bold text-center w-100" value="' . $row->status . '">Active</button>';
                    } else {
                        return '<button type="button" class="btn sandybrown-color fw-bold text-center w-100" value="' . $row->status . '">Inactive</button>';
                    }

                })

                ->addColumn('action', function ($row) {
                    $btn = '<div class="btn-group dropdown table-data-feature">
                              <a class="btn btn-subtle-primary btn-icon btn-sm" title="Edit" href="' . url('/editGroup/' . $row->id) . '"><i class="ph-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn group_delete" title="Delete" data-id = "' . $row->id . '"> <i class="ph-trash"></i></a>
                          </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('admin.group_view');

    }

}
