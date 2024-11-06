<?php

// use App\Http\Controllers\CarController;
// use App\Http\Controllers\ShowCarController;
// use App\Http\Controllers\ProductController;

use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $aboutPageUrl = '/about';

    // $aboutPageUrl = route('about');
    // dd($aboutPageUrl);

    // $productUrl = route('product.view', ['lang' => 'en', 'id' => 1]);
    // dd($productUrl);
    return view('welcome');
});

Route::view('/about','about')->name('about');

Route::get('/sum/{a}/{b}', [MathController::class, 'sum'])
->whereNumber(['a','b']);
Route::get('/subtract/{a}/{b}', [MathController::class, 'subtract'])
->whereNumber(['a','b']);


// Route::apiResources([
//     'cars'=> CarController::class,
//     'product' => ProductController::class
// ]);


// Route::controller (  CarController::class)->group (function() {
//     Route::get( '/car',  'index');
//     Route::get( '/my-cars', 'myCars');
//     });

// Route::get('/car/invokable',CarController::class);
// Route::get('/car',[CarController::class, 'index']);




// Route::get('/sum/{a}/{b}',function(float $a, float $b){
//     return $a + $b;
// })->whereNumber(['a','b']);



// Route::fallback(function(){
//     return 'Fallback';
// });



// Route::prefix('admin')->group (function () {
//     Route::get('/users', function () {
//     return '/admin/users';
//     });
// });

// Route::name('admin')->group (function () {
//     Route::get('/users', function () {
//     return '/users'; //But the route name is "admin.users"
//     })->name('users');
// });




// Route::get('/user/profile', function(){})->name('profile');

// Route::get('/current-user', function(){
//     // return redirect()->route('profile');

//     return to_route('profile');
// });

// Route::get("{lang}/product/{id}", function(string $lang, string $id) {
//     // ...
//         })->name('product.view');

// Route::get('/product/{id}', function(string $id){
//     return "Product ID=$id";
// });

// Route::get('/product/{category?}', function(string $category = null){
//     return "Product for category=$category";
// });

// Route::get('/product/{id}', function(string $id){
//     return "Woeks! $id";
// })->whereNumber('id');

// Route::get('/user/{username}', function(string $username) {
//     // ...
//     })->where('username','[a-z]+');

// Route::get("{Lang}/product/{id}", function(string $lang, string $id) {
//     // ...
//     })->where(['lang'=>'[a-z]{2}','id'=>'\d{4,}']);

// Route::get('/search/{search}', function (string $search) {
//     return $search;
//     })->where('search','.+');    


