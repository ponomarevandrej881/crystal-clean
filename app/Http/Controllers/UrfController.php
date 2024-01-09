<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrfController extends Controller
{
    public function form (Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'adres' => 'required',
            'telephone' => 'required',
            'date' => 'nullable',
            'area' => 'nullable',
            'name' => 'required|max:255',
            'adres' => 'required',
        ]);

        $jsona = '{"1":"11 ","2":"12","3":"13","4":"14","5":"15","6":"16"}';
        $price = json_decode($jsona, true);
        $name = $request->input('name');
        $area = $request->input('area');
        $surname = $request->input('surname');
        $adres = $request->input('adres');
        $telephone = $request->input('telephone');
        $type = $request->input('type');
        $cost = $area * $price[$type];
        DB::table('orders')->insert([
            'id' => '1',
            'client' => '1',
            'status' => '1',
            'date' => '2',
            'type' => '1',
            'comment' => '1',
            'payed' => '1',
            'contract' => '1',
            'typec' => '1',
            'contractinfo' => '1',
        ]);
     /*   DB::table('client')->insert([
            'id' => '1',
            'client' => '1',
            'status' => '1',
            'date' => '2',
            'type' => '1',
            'comment' => '1',
            'payed' => '1',
            'contract' => '1',
            'typec' => '1',
            'contractinfo' => '1',
        ]);*/
        /* INSERT INTO `orders` (`id`, `client`, `status`, `date`, `type`, `comment`, `payed`, `contract`, `typec`, `contractinfo`) VALUES ('', '', '', '', '', '', '', '', '', '') */
       return view('pay', ['cost' => $cost,'telephone' => $telephone,'surname' => $surname,'adres' => $adres,'name' => $name]);
  //     dd($logreq);
    }
}
