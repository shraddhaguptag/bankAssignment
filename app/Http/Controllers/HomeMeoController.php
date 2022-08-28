<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeMeoController extends Controller
{
   function index()
   {dd("meo");
       return view ("meo.index");
   }
}
