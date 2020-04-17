<?php

Route::group(['namespace' => 'Abs\BasicPkg', 'middleware' => ['web']], function () {
	Route::get('theme/', 'ThemePageController@themeGuideHome')->name('themeGuideHome');
});

Route::group(['namespace' => 'Abs\BasicPkg', 'prefix' => 'basic-pkg', 'middleware' => ['web', 'auth']], function () {
	Route::post('filter/save-preset', 'FilterController@saveFilterPreset')->name('saveFilterPreset');
});
