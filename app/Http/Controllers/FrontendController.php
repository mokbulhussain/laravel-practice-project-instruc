<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
            return view('home',['page_name'=>'Home Page','name'=>'Laravel Course']);
    }

    public function about(){
        $page="About Page";
        $title="About";
        $count=11;
        $color="orange";
        $products=[
            1=>[
                'name'=>'bag',
                'color'=>'red',
                'price'=>40
            ],
            2=>[
                'name'=>'bet',
                'color'=>'blue',
                'price'=>50
            ]
        ];
        return view('about',compact('page','title','count','color','products'));
    }

    public function contact(){
        return view('contact',['page_name'=>'Contact Page','name'=>'Laravel Course']);
    }

    public function service(){
        $service=['web','mobile','digital','graphisc'];
        return view('service',['service'=>$service]);
    }
}
