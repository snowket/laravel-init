<?php
Route::get('/',function(){
    return view('welcome');
});
Route::resource('person','PersonController');
Route::resource('classes','ClassController');
Route::get('login',function(){
    Auth::loginUsingId(1);
    return redirect('person');
});
Route::get('logout',function(){
    Auth::logout();
    return redirect('/');
});