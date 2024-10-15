<?php

use App\Http\Controllers\ProductController;
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

Route::get("/home", function () {
    return view('site.home.index');
})->name('home.index');


Route::get("/majers", function () {
    return view('site.majers.index');
})->name('majers.index');



Route::get("/contact", function () {
    return view('site.contact.index');
})->name('contact.index');


Route::get("/doctors", function () {
    return view('site.doctors.index');
})->name('doctors.index');



Route::get("/single", function () {
    return view('site.single.index');
})->name('single.index');



Route::get("/login", function () {
    return view('site.login.index');
})->name('login.index');


Route::get("/signup", function () {
    return view('site.signup.index');
})->name('signup.index');



//  Route::get('/products',[ProductController::class,'index']) ->name('products.index');;
//  Route::get('/products/{product}/show',[ProductController::class,'show'])->name('products.show');
//  Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
//  Route::post('/products',[ProductController::class,'store'])->name('products.store');


Route::resource('products',ProductController::class);


Route::prefix('ahmed')->group(function () {

    Route::get("/responses", function () {

        $products = [
            [
                'title' => 'product 1',
                'price' => 200,
                'description' => 'description for product 1',
                'is_new' => true,
                'offer' => 100,
            ],
            [
                'title' => 'product 2',
                'price' => 500,
                'description' => 'description for product 2',
                'is_new' => true,
                'offer' => 300,
            ],
            [
                'title' => 'product 3',
                'price' => 1000,
                'description' => 'description for product 3',
                'is_new' => false,
            ],
        ];

        return response($products, 201)
            ->header('Content-Type', 'application/json')
            ->cookie("NAME", 'data', 60 * 60);


    });
    Route::get("/redirect", function () {
        return redirect('home');

    });
    Route::get("/bake", function () {
        return redirect('home')->bake();

    });
    Route::get("/named-route", function () {
        return redirect()->route('home.index');

    });
    Route::get("/away", function () {
        return redirect()->away('https://google.com');

    });
    Route::get("/json", function () {
        $products = [
            [
                'title' => 'product 1',
                'price' => 200,
                'description' => 'description for product 1',
                'is_new' => true,
                'offer' => 100,
            ],
            [
                'title' => 'product 2',
                'price' => 500,
                'description' => 'description for product 2',
                'is_new' => true,
                'offer' => 300,
            ],
            [
                'title' => 'product 3',
                'price' => 1000,
                'description' => 'description for product 3',
                'is_new' => false,
            ],
        ];
        return response()->json($products);

    });

    Route::get("/download", function () {
        return response()->download(public_path('pho6.jpg'), env('APP_NAME') . '.jpg');

    });


});
