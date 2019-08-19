<?php

Route::group(['middleware'=>'admin','namespace' => 'Great\Cms\Http\Controllers'],function (){
    Route::get('/admin/khar', 'adminController@index');
});
//Route::get('/admin/mahmud', function (){
//    return config('cms.name');
//});
