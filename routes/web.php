<?php


/*
Route::get('/', function () {
    //الطريقة التانية وهي الافضل 
    $data=[];
    $data['id']=5;
    $data['name']='Reham Mahmmoud';
    return view('welcome', $data);
    //-> with(['string'=> 'Reham Mahmmoud', 'age'=> 22 ]); //الطريقة الاولى 
});    
*/



// Route:: resource('news','NewsController');
/* بدل م اكتب كل هاد كتب ال route resources
Route:: get('news','NewsController@index');
Route:: post('news','NewsController@store');
Route:: get('news/create','NewsController@create');
Route:: get('news/{id}/edit','NewsController@edit');
Route:: post('update/{id}','NewsController@update');
Route:: delete('news/{id}','NewsController@delete');

*/
//Route::get('create','controller@method'); //لو عندي ميثود بتعمل كريت فقط 
//يعني الريسورسز م بستخدمها غير لما اكون بدي كل الميثودات الي فوق 
//لكن لو محتاج ميثود وحدة بعمل بس على قد وحدة بالروت 


Auth::routes(['verify' => true  ]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware ('verified');

Route::get('/', function() {
    return 'Home' ;

});

Route::get('/dashboard', function () {

    return 'dashboard';
}) ;