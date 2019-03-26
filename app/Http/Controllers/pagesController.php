<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getIndex(){
        return view('pages/welcome');
    }
    public function getabout()
    {
        $first="momin";
        $last="abhi";
        $full=$first." ".$last;
        $email="mominabhi37@gmail.com";
        return view('pages/about')
            ->with("fullName",$full)
            ->with("email","$email")
            ;
    }
    public function getContact()
    {
        $faluda="shalehin";
        $data=[];
        $data['lulupa']="billu";
        $data['thamp']="shohan";
        return view('pages/contact')
            ->withFaluda($faluda)
             ->withData($data)
            ;
    }


}
