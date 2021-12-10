<?php

// use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\User\LoginController;
use App\Models\Product;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
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
    return view('home');
})->name('home');
Route::post('/', function (Request $request) {
    $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(), [
        'folder' => 'test'
    ])->getSecurePath();
    // return view('home');
    dd($uploadedFileUrl);
})->name('home');

Route::get('test', function () {
    $user = new User();
    $allUser = $user::all();
    dd($allUser);
});
Route::resource('product', 'ProductController');

Route::get('product-detail/{ProductId}', ['as' => 'productdetail', 'uses' => 'ProductController@getProductDetail']);

Route::get('add-product', ['as' => 'insert', 'uses' => 'ProductController@getCategory']);

Route::get('product', ['as' => 'product', 'uses' => 'ProductController@index']);

Route::post('add-product', ['as' => 'insert', 'uses' => 'ProductController@insertProduct']);

Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('login', function () {
    return view('login');
})->name('login');;
Route::get('register', function () {
    return view('register');
})->name('register');
// Route::get('login', function () {
//     return view('login');
// })->name('login');

Route::get('/admin', [HomeController::class, 'index']);

Route::get('/admin/user/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/user/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);
        // menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::get('edit/{id}', [MenuController::class, 'getById']);
            Route::post('edit/{id}', [MenuController::class, 'edit']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index'])->name('list');
            Route::delete('destroy', [MenuController::class], 'destroy');
        });
        //product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::get('edit/{id}', [ProductController::class, 'show']);
            Route::post('edit/{id}', [ProductController::class, 'edit']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index'])->name('list');
            Route::get('list/{id}', [ProductController::class], 'destroy');
        });
    });
});

Route::post("/admin/upload/services", [UploadController::class], 'index');
// Route::get('/', [MainController::class], 'index');
