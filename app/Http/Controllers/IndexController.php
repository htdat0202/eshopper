<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class IndexController extends Controller
{
    public function show()
    {
        return view('index');
    }

}