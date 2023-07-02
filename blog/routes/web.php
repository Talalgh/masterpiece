<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\admin2\AdminCoachController;
use App\Http\Controllers\admin2\CoachprofileController;
use App\Http\Controllers\admin2\SubcribtionController;
use App\Http\Controllers\admin2\UsercoachController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeControllerController;
use App\Http\Controllers\ServicController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\admin\ProfileadminController;
use App\Http\Controllers\admin\TableadminController;
use App\Http\Controllers\admin\EdituserController;
use App\Http\Controllers\admin\CoachesController;
use App\Http\Controllers\admin\ContactusadminController;
use App\Http\Controllers\admin\GymsController;
use App\Http\Controllers\admin\GymtableadminController;
use App\Http\Controllers\admin\ReviewadmainController;
use App\Http\Controllers\admin\TableGymController;
use App\Http\Controllers\admin\TableCoachesController;
use App\Http\Controllers\home\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SucsessController;
use App\Http\Controllers\VesacardController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/',HomeControllerController::class);








Route::resource('/service', ServicController::class);










Route::resource('/contact',ContactController::class);
Route::resource('/about-us',aboutController::class);







Route::resource('/class',TimetableController::class);










Route::resource('/calculator',CalculatorController::class);







Route::get('/login', [LoginController::class, 'index'])->name('sign-up.index');
Route::post('/register', [SignupController::class, 'store'])->name('sign-up');
Route::post('/login/check', [LoginController::class, 'check'])->name('login.check');
// Route::match(['get', 'post'], '/logout', [LogoutController::class, 'logout'])->name('logout');





Route::resource('/Admin',AdminController::class);
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');




Route::resource('/profile-admin', ProfileadminController::class);
Route::put('/admin/profile/{id}', [ProfileadminController::class, 'update'])->name('admin.profile.update');
Route::get('/admin/profile', [ProfileadminController::class, 'index'])->name('admin.profile.index');


Route::resource('/table-admin', TableadminController::class);
Route::delete('/admin/tables/{id}', [TableadminController::class, 'destroy'])->name('admin.tables.destroy');
Route::get('/admin/users/{id}/edit', [TableadminController::class,'edit'])->name('admin.edit_user');

Route::resource('/profile', ProfileController::class);

Route::get('/logout', function () {
    auth()->logout();  // Logout the user

    session()->invalidate();  // Invalidate the session
    session()->regenerateToken();  // Regenerate the CSRF token

    return redirect('/');  // Redirect to the home page or any other desired page
})->name('logout');

Route::resource('coaches-page',CoachesController::class);
Route::resource('/add_coaches',CoachesController::class);
Route::resource('coaches', 'App\Http\Controllers\Admin\CoachesController')->except(['create', 'edit']);
Route::post('/add_coaches', [CoachesController::class, 'store'])->name('coaches.store');


Route::resource('/Table-coaches',TableCoachesController::class);



Route::resource('/add-gym',TableGymController::class);
Route::resource('table-gym',TableGymController::class );
Route::get('/admin/add-gym', [TableGymController::class, 'index'])->name('admin.add_gym');

Route::post('/admin/add-gym', [TableGymController::class, 'store'])->name('admin.store_gym');


Route::resource('gyms-page',GymsController::class);
Route::get('/gyms/{gym}', [GymsController::class, 'show'])->name('gyms.show');


Route::resource('/gym-table-admin',GymtableadminController::class);
Route::get('/table-gyms/{gym}/edit', [GymTableAdminController::class, 'edit'])->name('table-gyms.edit');
Route::delete('/table-gyms/{gym}', [GymTableAdminController::class, 'destroy'])->name('table-gyms.destroy');
Route::get('/table-gyms', [GymtableadminController::class, 'index'])->name('gyms.index');
Route::put('/gyms/{gym}', [GymtableadminController::class, 'update'])->name('gyms.update');
Route::get('/gyms', [GymtableadminController::class, 'index'])->name('gyms.index');



Route::get('contact/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::get('admin/contactusmassage/{id}', [ContactController::class, 'show'])->name('admin.contactusmassage');


Route::resource('/contact-admin',ContactusadminController::class);
Route::delete('/contacts/{id}', [ContactusadminController::class, 'destroy'])->name('contact-admin.destroy');

Route::resource('/review',ReviewController::class);

Route::resource('/review-admain',ReviewadmainController::class);
Route::delete('/reviews/{id}', [ReviewadmainController::class, 'destroy'])->name('reviews.destroy');
Route::get('/reviews', [ReviewadmainController::class, 'index'])->name('reviews.index');
Route::get('/reviews/{id}', 'admin\ReviewadmainController@show')->name('home.review');




Route::resource('/vesa',VesacardController::class);







Route::resource('/dash-coach',AdminCoachController::class);






Route::resource('/profile-coach',CoachprofileController::class);
Route::put('/admin_coach/profilecoach/{id}', [CoachprofileController::class, 'update'])->name('admin_coach.profilecoach.update');
Route::post('/profile-coach/{id}', [CoachprofileController::class, 'update'])->name('profile-coach.update');
Route::get('/admin_coach/profilecoach', [CoachprofileController::class, 'index'])->name('admin_coach.profilecoach.index');



Route::resource('/subcribtion',SubcribtionController::class);
Route::post('/subcribtions', [SubcribtionController::class, 'store'])->name('subcribtions.store');





Route::post('/submit-form', [VesacardController::class, 'store'])->name('submit-form');



Route::resource('/sucsess',SucsessController::class);




Route::resource('/user-subscribtion',UsercoachController::class);




Route::delete('/subscriptions/{id}', [UsercoachController::class, 'destroy'])->name('subscriptions.destroy');
