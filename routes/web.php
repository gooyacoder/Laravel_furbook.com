<?php

use Illuminate\Support\Facades\Route;



Route::get('/cats/{id}', function($id){
	return sprintf('Cat #%s', $id);
})->where('id', '[0-9]+');

Route::get('/', function(){
	return redirect('/cats');
});

Route::get('about', function(){
	return view('about')->with('number_of_cats', 9000);
});

Route::get('cats', function() {
	$cats = App\Cat::all();
	return view('cats.index')->with('cats', $cats);
});

Route::get('cats/breeds/{name}', function($name) {
	$breed = App\Breed::with('cats')
		->whereName($name)
		->first();
	return view('cats.index')
		->with('breed', $breed)
		->with('cats', $breed->cats);
});