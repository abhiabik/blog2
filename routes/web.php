<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/testSql',function(){
 $result = DB::insert('insert into users(name,age,gender) values(?,?,?)',['abhishek','26',1]);
 if($result){
     return 'Record Created.';
 }else{
     return 'Record not created.';
 }
});
