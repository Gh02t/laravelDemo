<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PageController extends Controller
{
    /* return view from this controller*/
    public function home(){
        $prova = ['1','2','3','4'];
        return view('welcome', $prova);
    }
    public function about(){
        /*about page*/
        return view('about');
    }
    public function portfolio(){
        /*about page*/
        return view('portfolio');
    }
    public function login(){
        /*about page*/
        return view('login');
    }

}
