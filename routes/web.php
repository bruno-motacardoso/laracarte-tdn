<?php

use App\Mail\ContactMessageCreated;

Route::get('/', 'PagesController@home')->name('root_path');

Route::get('/about',[
	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);


Route::get('/contact',[
	'as' => 'contact_path',
	'uses' => 'ContactsController@create'
]);

Route::post('/contact',[
	'as' => 'contact_path',
	'uses' => 'ContactsController@store'
]);


Route::get('/test-email', function() {
	return new ContactMessageCreated('Bru', 'brunocardoso_2000@hotmail.com', 'Merci!');
});
