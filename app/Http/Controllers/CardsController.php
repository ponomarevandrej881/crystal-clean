<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    public function dats (Request $request){
        if (empty($_COOKIE["name"])){
            $login = 'Аккаунт';
        }
        else {
            $login = $_COOKIE["name"];
        }
        $id = $request->input('id');
        $count = DB::table('offers')->count();
        if($id == 0){
            $id=1;
        }
        if($id > $count){
            $id=$count;
        }
        $data = DB::table('offers')->find($id);
        $datas= json_decode(json_encode($data), true);
        $price = $datas['price'];
        $img = $datas['img'];
        $desc = $datas['description'];
        $name = $datas['name'];
return view('card', ['img' => $img,'price' => $price,'desc' => $desc,'name' => $name,'login' => $login]);
    }
}
