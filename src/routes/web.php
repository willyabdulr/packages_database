<?php
   
    // Route::get('contact', function(){
    //     return 'Hello from the contact form package';


        // Route::get('contact', function(){
        //     return view('app::contact');
        // });
        
        // Route::post('contact', function(){
        //     // kita masukkan logic disini
        // })->name('contact');


        Route::group(['namespace' => 'Example\App\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
        });

?>
