<?php

Route::group(['domain' => 'b.signin.104{any}.com.tw'], function () {
    Route::get('show', 'b@show');
    Route::get('common','common@show');

});

Route::group(['domain' => 'local.signin.104-dev.com.tw'], function () {
        Route::get('show', 'local@show');
    Route::get('common','common@show');

});

Route::get('common','common@show');
