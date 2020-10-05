<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct(){
        $this -> middleware('auth')->except('showname2');

    }
    public function showname($id){
        return 'my name is :' .$id;
    }

    public function showname1($id){
        return 'my name1 is :' .$id;
    }

    public function showname2($id){
        return 'my name2 is :' .$id;
    }
}
