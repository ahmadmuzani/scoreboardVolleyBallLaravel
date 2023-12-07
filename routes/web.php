<?php

use App\Models\Scoreboard;
use App\Models\statistic;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/information', function () {
//     return view('information');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/scoreboard', function () {
//     return view('scoreboard');
// });

// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/saveData/{team1}/{team2}/{counter1}/{counter2}/{set}/{spike1}/{spike2}/{block1}/{block2}/{serve1}/{serve2}/{opponent1}/{opponent2}', 'App\Http\Controllers\ScoreboardController@saveData')->name('saveData')->middleware('auth');

Route::get('/delete', function () {
    Illuminate\Support\Facades\Artisan::call("delete");
});
//PagesUtama
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/', 'App\Http\Controllers\IndexController@show');
Route::get('/carilah', 'App\Http\Controllers\IndexController@search');
Route::get("read_data", 'App\Http\Controllers\IndexController@read');
Route::get('/cari_tanggal', 'App\Http\Controllers\IndexController@search_tanggal');
Route::get("read_data", 'App\Http\Controllers\IndexController@reading');

// Route::get('/information', 'App\Http\Controllers\PagesController@information')->middleware('auth');

//search route
Route::get("search", 'App\Http\Controllers\ScoreboardController@search')->middleware('auth');
Route::get("read", 'App\Http\Controllers\ScoreboardController@read')->middleware('auth');


//view changepassword
Route::get('/newpassword', 'App\Http\Controllers\EditController@index')->middleware('auth');
Route::post('/newpassword', 'App\Http\Controllers\NewpasswordController@changePasswordPost')->name('changePasswordPost')->middleware('auth');

//route detail
// Route::get('/detail', 'App\Http\Controllers\PagesController@detail');
Route::get('/detail/{scoreboard}', 'App\Http\Controllers\DetailController@show');
// Route::get('/pertandingan', 'App\Http\Controllers\TurnamentController@show');

//user route
// Route::get('/users', 'App\Http\Controllers\UsersController@index')->middleware('auth');
// Route::get('/users', 'App\Http\Controllers\UsersController@indexScoreboard')->middleware('auth');
// Route::get("read_data", 'App\Http\Controllers\UsersController@read')->middleware('auth');
Route::get('/users/{user}', 'App\Http\Controllers\UsersController@show')->middleware('auth');
// Route::get('/cari', 'App\Http\Controllers\UsersController@search')->middleware('auth');
Route::get('/carihasilusers', 'App\Http\Controllers\UsersController@search');
Route::get("read_data", 'App\Http\Controllers\UsersController@read');
// Route::get("/bismilah", 'App\Http\Controllers\UsersController@caridong');
// Route::get("/users/mencari/{id}", 'App\Http\Controllers\UsersController@caridong');



//about routes
Route::get('about', 'App\Http\Controllers\AboutController@index');


//cari hasil pertandingan
Route::get('/cari', 'App\Http\Controllers\ProfileController@searching')->middleware('auth');
Route::get("read_data", 'App\Http\Controllers\ProfileController@reading')->middleware('auth');
Route::get('/profile', 'App\Http\Controllers\ProfileController@indexprofile')->name('profile')->middleware('auth');


//delete
Route::get("/delete/{id}", 'App\Http\Controllers\ProfileController@delete')->name('delete')->middleware('auth');
//update
Route::get('/edit', 'App\Http\Controllers\ProfileController@edit')->middleware('auth');
Route::put('/update/{id}', 'App\Http\Controllers\ProfileController@update')->middleware('auth');

//save photosprofile
Route::post('/ajaxuploadimg', 'App\Http\Controllers\ProfileController@imguploadpost')->middleware('auth');
//deletephotos
Route::get("/deletephotos/{id}", 'App\Http\Controllers\ProfileController@deletephotos')->name('deletephotos')->middleware('auth');


//  
// ->middleware('auth');


// Route::post('/scoreboard', 'App\Http\Controllers\ScoreboardController@store')->name('scoreboard')->middleware('auth');
// Route::get ('/store', 'App\Http\Controllers\ScoreboardController@store')->name('store');

// Route::get("search", 'App\Http\Controllers\ScoreboardController@search');

Route::post('/scoreboard/create', 'App\Http\Controllers\ScoreboardController@store');
Route::get('/scoreboard', 'App\Http\Controllers\ScoreboardController@index')->middleware('auth');
Route::get('/scoreboard/{scoreboard}', 'App\Http\Controllers\ScoreboardController@show')->middleware('auth');

Route::get('/index', 'App\Http\Controllers\RegistrationController@index')->middleware('auth');

Route::get('/login', 'App\Http\Controllers\LoginController@create')->name('login')->middleware('guest');

Route::post('/login', 'App\Http\Controllers\LoginController@authenticate')->middleware('guest');

Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->middleware('auth');

Route::get('/register', 'App\Http\Controllers\RegisterController@create')->middleware('guest');

Route::post('/register', 'App\Http\Controllers\RegisterController@store')->middleware('guest');

Route::get('/forgotpassword', 'App\Http\Controllers\ForgotPasswordController@index')->middleware('guest');
Route::post('/forgotpassword', 'App\Http\Controllers\ForgotPasswordController@sendResetLink')->middleware('guest');
Route::get('/reset/{token}', 'App\Http\Controllers\ForgotPasswordController@showResetForm')->name('reset.password.form')->middleware('guest');
Route::post('/reset', 'App\Http\Controllers\ForgotPasswordController@resetPassword')->name('reset.password')->middleware('guest');




//show hasil pertandingan
// Route::middleware(['auth'])->group(function () {
//     Route::get('/profile', function () {
//         $scoreboards = Scoreboard::with('user');
//         // $scoreboards = Scoreboard::with('user')->where('user_id', Auth::user()->id)->firstOrFail();
//         return view('profile', ['scoreboards' => $scoreboards]);
//     })->name('profile');
// });
//search route petandingan
// Route::get("/profile", 'App\Http\Controllers\ProfileController@search');


// Route::get('/turnament', 'App\Http\Controllers\TurnamentController@index');

// Route::get('counter', function () {
//     return view('livewire.counter');
// });
