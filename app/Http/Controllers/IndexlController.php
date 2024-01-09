<?php

namespace App\Http\Controllers;

use App\Models\offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexlController extends Controller
{
    public function base (Request $request){
    }
    public function gc () {
        if (empty($_COOKIE["name"])){
            $name = 'Аккаунт';
            return view('index',['name' => $name,'cards' => offers::paginate(6)]);
        }
        else{
            $name = $_COOKIE["name"];
return view('index',['name' => $name,'cards' => offers::paginate(6)]);
        }
    }
}
