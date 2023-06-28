<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "<html>
    <head>
    <title>Home page</title></head>
    <body>
    <h1>Home page</h1>
    </body></html>";
});

Route::get('pages/page1', function () {
    // $age = 20;
    return view('pages/page1', ["age" => 20]);
});

Route::get('/pages/page2', function () {
    $age = 30;
    return view("pages.page2", ["age" => $age]);
});

Route::get('/products/listing', function () {
    return view('products/listing');
});

Route::get('/products/details/{id?}', function ($id = 0) {
    return view('products/details', ["id" => $id]);
});

// use of controller
Route::prefix("/category/")->group(function () {
    Route::get("listing/{id}", [CategoryController::class, 'index'])->name('clist');
    Route::get("demo", [CategoryController::class, 'demo']);
    Route::get("add", [CategoryController::class, 'add'])->name('cadd');
    Route::post("add-cat", [CategoryController::class, 'addCat']);
});

Route::resource('emp', EmployeeController::class);
// Basic urls for every section. ex: product
// 1 add (form)
// 2. adding (post data)
// 3. list (all records)
// 4. del (id=2)
// 5. edit (id = 3)
// 6. update (post data along with id)
// 7. detail (id=2)
