<?php
use App\Http\Controllers\EmployeesController;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartControllera;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('index-3');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
     return view('service');
});
// Route::get('/indexa', action: function () {
//      return view('newindex');
// });




// to store product ////////////////////////////////////////////////////////////////////////////////////////////
Route::post('/add-to-cart', [ProductsController::class, 'addToCart'])->name('addToCart');
Route::post('/cart/add', [ProductsController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [ProductsController::class, 'showCart'])->name('cart.show');
Route::post('/cart/remove', [ProductsController::class, 'removeFromCart'])->name('cart.remove');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/team', [EmployeesController::class, 'team2'])->name('team2');




Route::get('Shopdetail/product/{id}', [ProductsController::class, 'showProductDetail']);


Route::get('/shoplisting', [ProductsController::class, 'showShopListing'])->name('shoplisting');




Route::get('/indexa', [ProductsController::class, 'team'])->name('team');

Route::get('/team/{id}', [EmployeesController::class, 'show'])->name('employees.show');



Route::get('/addEmployee', [EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store');
Route::get('/allEmployee', [EmployeesController::class, 'index'])->name('employees.index');

// Route::get('/employee/{id}', [EmployeesController::class, 'show'])->name('employees.show');



// Route to display the team page with dynamic employees



Route::delete('/employee/{id}', [EmployeesController::class, 'destroy'])->name('employees.destroy');
Route::get('/employee/{id}/edit', [EmployeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}', [EmployeesController::class, 'update'])->name('employees.update');



/*************************************************** Product controler *******************************************************/
Route::get('/addProduct', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('/allProducts', [ProductsController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [ProductsController::class, 'show'])->name( 'products.show');
Route::delete('/product/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('/product/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





use App\Http\Controllers\ServicesBookedController;

// Route to display the booking form


Route::get('/book', [ServicesBookedController::class, 'create'])->name('book.create');
Route::post('/book', [ServicesBookedController::class, 'store'])->name('book.store');


// Route to view booked services (optional)
Route::get('/booked-services', [ServicesBookedController::class, 'index'])->name('book.index');


use App\Http\Controllers\AppointmentsController;

Route::get('/booking/employee/{id}', [AppointmentsController::class, 'booking'])->name('appointments.booking');


Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments.index');
Route::post('/appointments', [AppointmentsController::class, 'store'])->name('appointments.store');




Route::post('/booking/employee/{employeeId}', [AppointmentsController::class, 'booking'])->name('booknow');



// Route::get('/appointment-success', [AppointmentsController::class, 'success'])->name('appointments.success');



// Route::get('/newindex', [ProductsController::class, 'showcount'])->name('indexa');
Route::get('/indexa', [ProductsController::class, 'showcount']);


// Route to show the booking page (GET)
Route::get('/employee/{employeeId}/booking', [AppointmentsController::class, 'booking'])->name('appointments.booking');

// Route to store the appointment (POST)
Route::post('/appointments/store', [AppointmentsController::class, 'store'])->name('appointments.store');


// web.php
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');






Route::get('/allTeam', [ProductsController::class, 'showAllStylers'])->name('allTeam');

// Route for showing the filtered employees (team3 method)
Route::get('/team3', [EmployeesController::class, 'team3'])->name('team3.index');


Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/products', [ProductsController::class, 'productList'])->name('productList');

Route::post('/cart/increase/{productId}', [CartController::class, 'increaseQuantity'])->name('cart.increase');
Route::post('/cart/decrease/{productId}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');