<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function(){
    Route::group(['prefix' => 'product'], function(){
        Route::get('/getProduct', 'App\Http\Controllers\ProductController@getProductsbyID');

        Route::get('/getProductsbyID',
        'App\Http\Controllers\ProductController@getProductsbyID'
    ) -> name('getProductsbyID');

        Route::get('/insertProduct',#go den form
            'App\Http\Controllers\ProductController@forminsertProduct'
        ) -> name('admin.product.insertProduct');
        Route::post('/insertProduct',#day du lieu den database
        'App\Http\Controllers\ProductController@insertProduct'
    ) -> name('admin.product.insertProduct');

        Route::get('/deleteProduct/{p_id}',#go den form
                'App\Http\Controllers\ProductController@deleteProduct'
            );

        #Update
        Route::get('/updateProduct/{p_id}',#go den form
        'App\Http\Controllers\ProductController@editProduct'
    ) ;
        Route::post('/updateProduct/{p_id}',#day du lieu den database
        'App\Http\Controllers\ProductController@updateProduct'
    ) ;

            
});
        Route::group(['prefix' => 'category'], function(){
        Route::get('/getCategory', 'App\Http\Controllers\CategoryController@getCategory');

        Route::get('/insertCategory',#go den form
            'App\Http\Controllers\CategoryController@forminsertCategory'
        ) -> name('admin.category.insertCategory');
        Route::post('/insertCategory',#day du lieu den database
        'App\Http\Controllers\CategoryController@insertCategory'
    ) -> name('admin.category.insertCategory');

        Route::get('/deleteCategory/{c_id}',#go den form
                'App\Http\Controllers\CategoryController@deleteCategory'
            );

        #Update
        Route::get('/updateCategory/{c_id}',#go den form
        'App\Http\Controllers\CategoryController@editCategory'
    ) ;
        Route::post('/updateCategory/{c_id}',#day du lieu den database
        'App\Http\Controllers\CategoryController@updateCategory'
    ) ;

            
    });
});
    #User
    Route::group(['prefix' => 'user', 'middleware' => 'role:user'], function(){
        Route::group(['prefix' => 'product'], function(){
            Route::get('/getProductU', 'App\Http\Controllers\ProductController@getProductU');
        

        });
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
