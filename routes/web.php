<?php

use App\Http\Controllers\ABCController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IdentitycardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestFormController;
use App\Http\Controllers\FileUpload;









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
// Route::get('/', function () {
//     return view('greeting', ['records' => [1, 2, 3]]);
// });
Route::get('blade', function () {
    return view('child');
});
// Route::get('/', function () {
//     return view('greeting', ['values' => ["a", "b", "c", "d"]]);
// });
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

// Route::get('/', [
//     CountryController::class,
//     'index',
// ]);
Route::get('users', [
    UserController::class,
    'index'
]);
Route::get('flights', [
    FlightController::class,
    'index'
]);
Route::get('collect1', [
    CollectionController::class,
    'collection_class'
]);
Route::get('collect2', [
    CollectionController::class,
    'collect_method'
]);

Route::get(
    'src_collection',
    [CollectionController::class, 'search_data']
);

Route::get(
    'filter_collection',
    [CollectionController::class, 'filter_data']
);
Route::get(
    'sort_collection',
    [CollectionController::class, 'sort_data']
);

Route::get(
    'key_collection',
    [CollectionController::class, 'read_keys']
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'cars',
    [
        CarController::class,
        "index"
    ]
);
Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

Route::get(
    'json',
    function () {
        return response()->json([
            'name' => 'Barack Obama',
            'state' => 'Illinois'
        ]);
    }
);
Route::get('testForm', [TestFormController::class, 'index']);
Route::post('test-form', [TestFormController::class, 'test']);

Route::get('/test', [TestController::class,'index'])
->middleware(['age','role:editor']);

Route::get('/terminate', [ABCController::class,
'index']);

Route::get('session/get', [SessionController::class, 'accessSessionData']);
Route::get('session/set', [SessionController::class, 'storeSessionData']);
Route::get('session/remove', [SessionController::class, 'deleteSessionData']);

Route::get('cache/put', [CacheController::class, 'put']);
Route::get('cache/get', [CacheController::class, 'get']);

Route::get('/second', [ABCController::class,
'index']);
Route::get('/first', [TestFormController::class,
'index'])->middleware();

Route::get('/identity',[IdentitycardController::class,'index']);
Route::get('/Userid',[UserController::class,'index']);

Route::get('/brand',[BrandController::class,'index']);
Route::get('/product',[ProductController::class,'index']);

Route::get('/product/store',[ProductController::class,'store']);
Route::get('/product/show-data',[ProductController::class,'showData']);
Route::get('/category/show-data',[CategoryController::class,'showData']);

Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

Route::get('/company/{id}',[CompanyController::class,'index']);
Route::get('/user/{id}',[UserController::class,'index']);
