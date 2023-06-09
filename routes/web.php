<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\authController;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\ControllerBlog;
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
    return view('Header');
});

Route::get('/home', function () {
    return view('Home');
});
Route::view('/home', 'Home');

// Route::get('/blog', function () {
//     $blogs=[
//         1 => ['title' => 'Cours Laravel', 'image' => 'https://th.bing.com/th/id/OIP.p6_DFmsv5ENz76b_KxP-wwHaHa?pid=ImgDet&rs=1'],
//         2 => ['title' => 'Cours React', 'image' => 'https://th.bing.com/th/id/OIP.K-4RqDC6zFrpAG31ayDDOgHaHa?w=170&h=180&c=7&r=0&o=5&pid=1.7'],
//         3 => ['title' => 'Cours PHP', 'image' => 'https://th.bing.com/th/id/OIP.Y1hq9sHXG26Fyhys81z8rgHaDt?pid=ImgDet&rs=1'],
//         4 => ['title' => 'Cours hTML', 'image' => 'https://th.bing.com/th/id/R.86b6eb77557d5296bd887c7a0b50318e?rik=HT0nd1qNlep0Kw&pid=ImgRaw&r=0'],
//         5 => ['title' => 'Cours Css', 'image' => 'https://th.bing.com/th/id/OIP.ayAY9cZTL2wpgG7wb_sVjQHaEM?pid=ImgDet&rs=1'],
//         6 => ['title' => 'Cours Bootstrap', 'image' => 'https://th.bing.com/th/id/OIP.2lPcNBjKmc6P7DhGJ02cuAHaHa?w=174&h=180&c=7&r=0&o=5&pid=1.7'],
//     ];
//     return view('Blog', ['data' => $blogs]);
    
// });

Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/create', function () {
    return view('create');
});
// Route::get('/update', function () {
//     return view('update');
// });


// -------------Second seance
// Route::get('/blog/{id}', function ($id) {
//     $blogs=[
//         1 => ['title' => 'Cours Laravel'],
//         2=>['title' => 'Cour React']
//     ];
//     return view('Single', ['data' => $blogs[$id]]) ;
// });



// Route::get('/blog/{id}', function ($id) {
//     $blogs=[
//         1 => ['title' => 'Cours Laravel', 'image' => 'https://th.bing.com/th/id/OIP.p6_DFmsv5ENz76b_KxP-wwHaHa?pid=ImgDet&rs=1'],
//         2 => ['title' => 'Cours React', 'image' => 'https://th.bing.com/th/id/OIP.K-4RqDC6zFrpAG31ayDDOgHaHa?w=170&h=180&c=7&r=0&o=5&pid=1.7'],
//         3 => ['title' => 'Cours PHP', 'image' => 'https://th.bing.com/th/id/OIP.Y1hq9sHXG26Fyhys81z8rgHaDt?pid=ImgDet&rs=1'],
//         4 => ['title' => 'Cours hTML', 'image' => 'https://th.bing.com/th/id/R.86b6eb77557d5296bd887c7a0b50318e?rik=HT0nd1qNlep0Kw&pid=ImgRaw&r=0'],
//         5 => ['title' => 'Cours Css', 'image' => 'https://th.bing.com/th/id/OIP.ayAY9cZTL2wpgG7wb_sVjQHaEM?pid=ImgDet&rs=1'],
//         6 => ['title' => 'Cours Bootstrap', 'image' => 'https://th.bing.com/th/id/OIP.2lPcNBjKmc6P7DhGJ02cuAHaHa?w=174&h=180&c=7&r=0&o=5&pid=1.7'],
//     ];
//     return view('Single', ['data' => $blogs[$id]]) ;
// });




// ------------------Third seance
// controller connection 


Route::get('/blog/{id}', [blogController::class,'SingleBlog']);
Route::get('/blog', [blogController::class,'Blog']);



Route::resource('/resource', 'App\Http\Controllers\BblogController')->only(['index', 'show', 'store','create', 'edit', 'update', 'destroy']);


Route::controller(authController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});
