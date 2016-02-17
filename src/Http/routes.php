<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'Ecommerce\Productso\Http\Controllers\PrsoCategoryController@show');
});