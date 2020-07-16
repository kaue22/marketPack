<?php

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
    $helloWorld = 'Hello World';

    return view('welcome',compact('helloWorld'));
});


Route::get('/model',function(){


});

Route::get('/admin/stores', 'Admin\\StoreController@index');
Route::get('/admin/stores/create', 'Admin\\StoreController@create');
Route::post('/admin/stores/store', 'Admin\\StoreController@store');












    //$products = \App\Product::all();
 /*   $user = new \App\User();
    $user->name  = 'teste2';
    $user->email ='teste@aeb2.com';
    $user->password = bcrypt('12345678');
    $user->save();
    //return $user->save();*/

  //  $user =\App\User::find(4);

   // dd($user->store()->count());

   //$loja = \App\Store::find(1);

   //return $loja->products()->where('id',9)->get();

   //Pegar categorias de uma loja
 //  $categoria = \App\Category::find(1);
 //  $categoria->products;


    //Criar Loja para um usuario
  /*  $user = \App\User::find(10);
    $store = $user->store()->create(
        [
            'name' => 'Loja do Kauê',
            'description' =>'Loja maneira do kaue',
            'mobile_phone' => '11-95451-3770',
            'phone' => '11-95451-3770',
            'slug' => 'loja-kaue'
        ]
    );
dd($store);*/
    //Criar produto para uma loja

 /*   $store = \App\Store::find(41);
    $product = $store->products()->create([
        'name' => 'PC Gamer',
        'description' =>'Core I9',
        'body' => 'GOD GOD',
        'price' => 5999.90 ,
        'slug' => 'pc-gamer',
    ]);
    dd($product);*/
    //Criar uma categoria
    /*
\App\Category::create([
    'name' =>'Games',
    'description' =>null,
    'slug' => 'games',
]);
\App\Category::create([
    'name' =>'Pc',
    'description' =>null,
    'slug' => 'pc',
]);*/

//return \App\Category::all();
    //Adicionar produto para categoria ou vice versa

/*$product = \App\Product::find(46);
dd($product->categories()->attach([1]));
dd($product->categories()->detach([1]));
dd($product->categories()->sync([1]));
return \App\User::find(30);*/
