<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    //home page
    public function home(){
        return view('home');
    }

    //dashboard page
    public function dashboard(){
        return view('atur-adil/dashboard-adil');
    }

    //aturacak page
    public function aturacak(){
        return view('atur-acak');
    }

    //contact page
    public function contact(){
        return view('contact');
    }

    //startgroup page
    public function startgroup(){
        return view('atur-adil/make-adil-group');
    }

    //joingroup page
    public function joingroup(){
        return view('atur-adil/join-group');
    }

    //resultgroup page
    public function resultgroup(){
        return view('atur-adil/result-group');
    }

    //formgroup page
    public function formgroup(){
        return view('atur-adil/form-group');
    }
}
