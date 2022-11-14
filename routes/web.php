<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CountryController;
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
Route::get('/', function () {
    return view('greeting', ['records' => [1, 2, 3]]);
});
Route::get('blade', function () {
    return view('child');
});
Route::get('/', function () {
    return view('greeting', ['values' => ["a", "b", "c", "d"]]);
});
Route::get(
    'posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        //
    }
);

// parametrn karoxe linel voch partadir bayc petq e callback funkciayum grvi default arjeq
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//         return "This is admin/users";
//     });
//     Route::get('/managers', function () {
//         // Matches The "/admin/users" URL
//         return "This is admin/managers";
//     });
// });
Route::get('/user/{id}', [
    UserController::class,
    'show'
]);

// UserController::class, - nshanakum e UserController classi chanaparh@


Route::resource('photos', PhotoController::class);

Route::get('countries', [
    CountryController::class,
    'index'
]);


// stexcel view vor@ kkancvi controlleri mejic ev kparunaki dropdown bolor erkrneri anunnerov

Route::get('/', [
    CountryController::class,
    'index',
]);
Route::get('users',[
    UserController::class,
    'index'
]);
