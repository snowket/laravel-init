<?php
Route::get('/',function(){
    if(Auth::check())
        return view('welcome');
    else
        return redirect('login');
});

    Route::resource('person','PersonController');
    Route::resource('classes','ClassController');
    Route::resource('Teachers','TeacherController');


Route::get('login',function(){
    Auth::loginUsingId(1);
    return redirect('person');
});
Route::get('logout',function(){
    Auth::logout();
    return redirect('/');
});