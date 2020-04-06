<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Laravel Routing and Controller';
        return view('index')->with('title',$title);
    }
    public function services(){
        $data = [
            'title' => 'Services',
            'services' => ["Programming","SEO","Animation"]
        ];
        return view('services')->with($data);
    }
}
