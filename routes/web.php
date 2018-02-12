<?php

Route::get('/', 'PagesController@home')->name('root_path');

Route::get('/about',[
	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);
