<?php

use Illuminate\Support\Facades\Route;

Route::get('/cats', function(){
	return 'All cats.';
});

Route::get('/cats/{id}', function($id){
	return sprintf('Cat #%s', $id);
})->where('id', '[0-9]+');

Route::get('/', function(){
	return redirect('/cats');
});