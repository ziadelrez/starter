<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;


Class userController extends Controller
{

    public function showAdminName(){

        return ' Ziad is the Admin';
    }

    public function getindex (){
        // pass parameter with single string
//         return view('front/showindex')->with('data','By Ziad El Rez');

        // pass parameter with multiple string => Method 1
       // return view('front/showindex')->with(['data'=>'By Ziad El Rez','data1'=>'Tripoli','data2'=>'Lebanon']);

        // pass parameter with multiple string => Method 2
//        $data = [];
//        $data['name'] = 'By Ziad Ezzedin El Rez';
//        $data['region']='Tripoli City';
//        $data['country']='North Lebanon';
//
//        return view('front/showindex',$data);


        // pass parameter with multiple string => Method 3 using object
//       $obj = new \stdClass();
//       $obj -> name = 'Ziad The Manager';
//       $obj -> reg = 'The City Of Tripoli';
//       $obj -> countryname = 'Lebanon The Country';
//
//        return view('front/showindex',compact('obj'));

        // pass parameter with multiple string => Method 2
        $data = ['Ahmad','Wassim'];

        return view('front/showindex',compact('data'));

    }

}
