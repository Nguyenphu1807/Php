<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;


class Aboutcontroller extends BaseController
{
    public function showDetail(){
        return 'About Detail Information';
    }
    public function showSubject($theSubject){
        return "Detail information about $theSubject";
    }
}
