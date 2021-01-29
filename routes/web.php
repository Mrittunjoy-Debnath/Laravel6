<?php

// use App\Http\Controllers\YouthController;

Route::get('/', [
    'uses' => 'YouthController@index',
    'as' => '/'
]);
Route::get('/category/products', [
    'uses' => 'YouthController@category',
    'as' => 'category'
]);
Route::get('/sign', [
    'uses' => 'YouthController@sign',
    'as' => 'sign'
]);
Route::get('/contact', [
    'uses' => 'YouthController@contact',
    'as' => 'contact'
]);
Route::get('/single', [
    'uses' => 'YouthController@single',
    'as' => 'single'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    /*category*/

Route::get('/category/add',[
'uses'=> 'CategoryController@index',
'as'=>'add-category'
]);
Route::post('/category/save',[
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
]);
Route::get('/category/manage',[
    'uses'=> 'CategoryController@manageCategory',
    'as'=>'manage-category'
    ]);
Route::get('/category/unpublished/{id}',[
    'uses'=> 'CategoryController@unpublishedCategory',
    'as'=>'unpublished-category'
    ]);

Route::get('/category/published/{id}',[
    'uses'=> 'CategoryController@publishedCategory',
    'as'=>'published-category'
    ]);

Route::get('/category/edit/{id}',[
    'uses'=> 'CategoryController@editCategory',
    'as'=>'edit-category'
    ]);
Route::post('/category/udpate/{id}',[
    'uses'=> 'CategoryController@updateCategory',
    'as'=>'update-category'
    ]);
Route::get('/category/delete/{id}',[
    'uses'=> 'CategoryController@deleteCategory',
    'as'=>'delete-category'
    ]);
    /*category*/

    /* Brand */
Route::get('/brand/add',[
'uses' =>'BrandController@index',
'as' =>'add-brand'
]);

Route::post('/brand/save',[
    'uses'=>'BrandController@saveBrand',
    'as'=>'new-brand'
]);
/* Brand */

/* product */

Route::get('/product/add',[
    'uses'=>'ProductController@index',
    'as' =>'add-product'
]);

Route::post('/product/save',[
    'uses'=>'ProductController@saveProduct',
    'as'=>'new-product'
]);
