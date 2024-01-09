<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class SortlController extends Controller
{
    public function sortc(){
            if (empty($_COOKIE["name"])){
                return view('auth');
            }
            else{
                $name = $_COOKIE["name"];
                return view('sortcab',['name' => $name,'cardes' => order::all()]);}
    }
}
