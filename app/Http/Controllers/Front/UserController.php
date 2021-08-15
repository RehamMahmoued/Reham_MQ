<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{ public function showUserName(){
    return 'Reham Mahmmoud' ;

}
public function getIndex(){
    $data=[];
    $data['id']=22;
    $data['name']='Reham Mahmmoud';


    //ممكن اعمل باس للداتا بشكل اخر 
   /* $obj = new \stdClass();
    $obj ->name = 'Reham';
    $obj ->id = '22';
    $obj ->gender = 'female'; */



$data=[] ;
 return view('welcome' , compact ('data')) ;

}

}
