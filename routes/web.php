<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductsController;
//use App\Http\Controllers\Admin\ProductsController;
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
    $products = Product::all();
    return view('products',['products' => $products]);
});

Route::get('/products/{prod}', function (Product $prod) {
    //  $product = Product::find($id);
    return view('product', ['product'=>$prod]);
});

Route::get('/create_product', function () {
    Product::create([
            'product_name' => 'Laptop',
            'product_desc' => 'This is very nice laptop',
            'price' => '100000',
            'image' => ''
 
    ]);

   # $sql ="INSERT INTO products(product_name, product_desc,price) VALUES ('laptop',  'this is laptop', '10000')";
});

Route::get('/home', [ProductsController::class, 'index']);

Route::get('/categories/{category}', function(category  $category){
   // $products = Product::whereCategoryId($category->id)->get();
   $products = $category->products; 
   return view('category',['products' =>$products,'category' => $category]);
});
// Route::get('/get_product', function () {
//     $Product = Product::get();
//             return $products;
// });
Route::get('/admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/products', [App\Http\Controllers\Admin\ProductsController::class, 'index'])->name('products_list');
Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductsController::class, 'create'])->name('create_product');
Route::post('/admin/products/store', [App\Http\Controllers\Admin\ProductsController::class, 'store']);
Route::get('/admin/products/edit/{product}', [App\Http\Controllers\Admin\ProductsController::class, 'edit']);
Route::post('/admin/products/update/{product}', [App\Http\Controllers\Admin\ProductsController::class, 'update']);