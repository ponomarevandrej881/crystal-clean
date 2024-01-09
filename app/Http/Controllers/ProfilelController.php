<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilelController extends Controller
{
    public function check (Request $request){
        if (empty($_COOKIE["name"])){
            $name = 'Аккаунт';
            return view('auth',['name' => $name]);
        }
        else{
            $login = $_COOKIE["login"];
            $at = $_COOKIE["autorize"];
            $name = $_COOKIE["name"];
            return view('profile',['name' => $name]);}
    }
    public function auth (Request $request) {
        $request->validate([
            'tel' => 'required',
            'pass' => 'required',
        ]);

        $login = $request->input('tel');
        $loginm = (int)$login;
        $pass = $request-> input('pass');
        $passmd = md5($pass);
        if (client::where('tel', '=', $loginm)->count() > 0){
        $data = DB::table('clients')-> where('tel', '=', $login)->get(); ;
        $datas= json_decode(json_encode($data), true);
        foreach ($datas as $dt){}
        $realpass = $dt['password'];
        $realtel = $dt['tel'];
        $name =  $dt['name'];
        if ($passmd !== $realpass){
            echo 'пароль неверный';
            return view('auth');

         }
        elseif ($loginm !== $realtel){
            echo 'логин неверный';
            return view('auth');

            }
        else {

            setcookie("autorize", 'autorized', time() + 1440);
            setcookie("login", $login, time() + 1440);
            setcookie("name", $name, time() + 1440);
            return view('profile', ['name' => $name]);
            }}
        else {
            echo 'логин неверный';
            return view('auth');
            }

    }

    public static function register(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'tel' => 'required|max:255',
            'pass' => 'required|max:255',
            'secpass' => 'required|max:255',
        ]);
        //совпадение? не думаю...
        $tel = $request->input('tel');
        $surname = $request->input('surname');
        $name = $request->input('name');
        $pass = $request->input('pass');
        $secpass = $request->input('secpass');
        $datar = DB::table('clients')-> where('tel', '=', $tel)->get(); ;
        $datars= json_decode(json_encode($datar), true);
        if (client::where('tel', '=', $tel)->count() > 0){

            $message = 'Такой пользователь уже есть';
            return view('register',['message' => $message]);

       // }
        }
        else {
            if ($pass !== $secpass){
                $message = 'Пароли не совпадают';;
                return view('register',['message' => $message]);
            }
            else{
                $mdpass = md5($pass);
                DB::table('clients')->insert([
                    'id' => null,
                    'name' => $name,
                    'surname' => $surname,
                    'tel' => $tel,
                    'adress' => 'no adress',
                    'password' => $mdpass,
                    'hp' => '1'
                ]);
                return view('auth');
            }
        }
    }
    public function logout(){
        setcookie("autorize", '', time() - 1440);
        setcookie("login", '', time() - 1440);
        setcookie("name", '', time() - 1440);
        return view('auth');
    }

    public static function infoprofile (){
        if (empty($_COOKIE["name"])){
            $name = 'Аккаунт';
            return view('auth',['name' => $name]);
        }
        else{
            var_dump($_COOKIE["name"]);
            $login = $_COOKIE["login"];
          //  return view('index',['name' => $login]);
        $datar = DB::table('clients')-> where('tel', '=', $login)->get(); ;
        $datars= json_decode(json_encode($datar), true);
        var_dump($datar);
        var_dump($datars);
        var_dump($_COOKIE["name"]);
        $name = $datars['name'];
        $surname = $datars['surname'];
        $tel = $datars['tel'];
        $adress = $datars['adress'];
        return $name. $adress. $tel.$surname;}
    }
}
