<?php
use App\Http\Controllers\LoginController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [LoginController::class, 'home']);
Route::get('/about', [LoginController::class, 'about']);
// Route::get('/project', [LoginController::class, 'project']);
Route::any('projects/{name}', [LoginController::class, 'projects']);
Route::get('/project', [LoginController::class, 'project']);
Route::any('/details/{slug}', [LoginController::class, 'details']);
Route::get('/contact', [LoginController::class, 'contact']);
Route::post('/send_msg', [LoginController::class, 'send_msg']);

Route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin', [AdminController::class, 'admin']);
Route::post('/checklogin', [AdminController::class, 'checklogin']);


/*----------------------Start Testimonial----------------------------*/
Route::get('/testimonial', [AdminController::class, 'testimonial']);
Route::post('/create_testimonial', [AdminController::class, 'create_testimonial']);
Route::get('/testimonial_view', [AdminController::class, 'testimonial_view']);
Route::any('editTestimonial/{id}', [AdminController::class, 'editTestimonial']);
Route::post('/update_testimonial', [AdminController::class, 'update_testimonial']);
Route::get('/delete_testimonial/{id}', [AdminController::class, 'delete_testimonial']);
/*----------------------End Testimonial----------------------------*/

/*----------------------Start Testimonial----------------------------*/
Route::get('/blog', [AdminController::class, 'blog']);
Route::post('/create_blog', [AdminController::class, 'create_blog']);
Route::get('/blog_view', [AdminController::class, 'blog_view']);
Route::any('editBlog/{id}', [AdminController::class, 'editBlog']);
Route::post('/update_blog', [AdminController::class, 'update_blog']);
Route::get('/delete_blog/{id}', [AdminController::class, 'delete_blog']);
/*----------------------End Testimonial----------------------------*/

/*----------------------Start Slider----------------------------*/
Route::get('/slider', [AdminController::class, 'slider']);
Route::post('/create_slider', [AdminController::class, 'create_slider']);
Route::get('/slider_view', [AdminController::class, 'slider_view']);
Route::any('editSlider/{id}', [AdminController::class, 'editSlider']);
Route::post('/update_slider', [AdminController::class, 'update_slider']);
Route::get('/delete_slider/{id}', [AdminController::class, 'delete_slider']);
/*----------------------End Slider----------------------------*/

/*----------------------Start Gallery----------------------------*/
Route::get('/admin_gallery', [AdminController::class, 'admin_gallery']);
Route::post('/create_gallery', [AdminController::class, 'create_gallery']);
Route::get('/gallery_view', [AdminController::class, 'gallery_view']);
Route::any('editGallery/{id}', [AdminController::class, 'editGallery']);
Route::post('/update_gallery', [AdminController::class, 'update_gallery']);
Route::get('/delete_gallery/{id}', [AdminController::class, 'delete_gallery']);
/*----------------------End Gallery----------------------------*/

/*----------------------Start city----------------------------*/
Route::get('/city', [AdminController::class, 'city']);
Route::post('/create_city', [AdminController::class, 'create_city']);
Route::get('/city_view', [AdminController::class, 'city_view']);
Route::any('editCity/{id}', [AdminController::class, 'editCity']);
Route::post('/update_city', [AdminController::class, 'update_city']);
Route::get('/delete_city/{id}', [AdminController::class, 'delete_city']);
/*----------------------End city----------------------------*/

/*----------------------Start Ammenities----------------------------*/
Route::get('/ammenities', [AdminController::class, 'ammenities']);
Route::post('/create_ammenities', [AdminController::class, 'create_ammenities']);
Route::get('/ammenities_view', [AdminController::class, 'ammenities_view']);
Route::any('editAmmenities/{id}', [AdminController::class, 'editAmmenities']);
Route::post('/update_ammenities', [AdminController::class, 'update_ammenities']);
Route::get('/delete_ammenities/{id}', [AdminController::class, 'delete_ammenities']);
/*----------------------End Ammenities----------------------------*/

/*----------------------Start Properties----------------------------*/
Route::get('/property', [AdminController::class, 'property']);
Route::post('/create_property', [AdminController::class, 'create_property']);
Route::get('/property_view', [AdminController::class, 'property_view']);
Route::any('editProperty/{id}', [AdminController::class, 'editProperty']);
Route::post('/update_property', [AdminController::class, 'update_property']);
Route::get('/delete_property/{id}', [AdminController::class, 'delete_property']);
/*----------------------End Properties----------------------------*/

/*----------------------Start Users----------------------------*/
Route::get('/user', [AdminController::class, 'user']);
Route::post('/create_user', [AdminController::class, 'create_user']);
Route::get('/user_view', [AdminController::class, 'user_view']);
Route::any('editUser/{id}', [AdminController::class, 'editUser']);
Route::post('/update_user', [AdminController::class, 'update_user']);
Route::get('/delete_user/{id}', [AdminController::class, 'delete_user']);
/*----------------------End Users----------------------------*/
Route::get('/chat', [AdminController::class, 'chat']);
Route::post('/send-messages',[AdminController::class, 'SendMessages']);
Route::post('/get-messages',[AdminController::class, 'GetMessages']);


Route::get('/chat_model', [AdminController::class, 'chat_model']);
Route::post('/create_group', [AdminController::class, 'create_group']);
Route::get('/group_view', [AdminController::class, 'group_view']);

Route::get('/blog-details', function () {
    return view('/blog-details');
});
Route::get('/gallery', function () {
    return view('/gallery');
});

Route::get('/User_login', [UserController::class, 'User_login']);
Route::post('/user_checklogin', [UserController::class, 'user_checklogin']);
Route::get('/user_dashboard', [UserController::class, 'user_dashboard']);

Route::get('/user_dashboard', [UserController::class, 'user_dashboard']);






