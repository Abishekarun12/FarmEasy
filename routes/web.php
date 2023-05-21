<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    PostController,
    ProductController,
};

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
    return view ('welcome');
});

// Route::get('/admin/posts',[PostController::class,'Admin\PostController@show']);
// Route::get('/admin/posts',[PostController::class,'Admin\PostController@store']);
// Route::get('welcome/{id}',[PostController::class,'Admin\PostController@show']);
// Route::get('/product','ProductController@index')->name('index');
Route::get('/admin/upload',[PageController::class,'uploadpage']);
// Route::get('/product',[ProductController::class],'products.index');
Route::get('/products',[App\Http\Controllers\Admin\ProductController::class,'index'])
->name('products.index');
// Route::get('/product',[App\Http\Controllers\Admin\ProductController::class])

Route::post('make/payment',[StripeController::class])->name('make.payment');

Route::get('payment',[StripeController::class,'form'])->name('form.payment');
Route::post('make/payment',[StripeController::class,'makepayment'])->name('make.payment');

Route::get('/test-mail',function(){

    $message = "Testing mail";

    Mail::raw('Hi, welcome!', function ($message) {
      $message->to('abiakpro7708@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});

Route::get('/dashboard','App\Http\Controllers\Admin\PostController@showFiles')->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('front.dashboard');
// })->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';

// Route::post('/delete-file', function (Illuminate\Http\Request $request) {
//     $file = $request->input('file');
//     Storage::delete($file);
//     return redirect()->back()->with('success', 'File has been deleted.');
// })
// ->middleware(['auth'])->name('delete.file');




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');
        Route::resource('products','ProductController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});



// Route::get('/clear', function () {
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     Artisan::call('route:clear');
//     Artisan::call('optimize');
//     return "Cleared!";
// });