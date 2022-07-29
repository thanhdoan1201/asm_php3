<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index(){
        $this->v['title'] = 'Trang Chủ';
        return view('Fontend.index',$this->v);
    }
}
