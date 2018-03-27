<?php

namespace App\Http\Controllers\JeeMain;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JeeMainController extends Controller
{
    public function index(){
       return view('jeemain/jeeMainHome');
    }
}
