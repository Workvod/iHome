<?php

namespace App\Http\Controllers;

use DB;
use App\Color;
use App\Tovar;
use App\Obem;
use App\Type;
use App\Podborki;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function show(){
        return view('admin');
    }

    public function aut(Request $request){
        $login = $request->input('login');
        $pass = $request->input('pass');
        if($login=="VlaDim" and $pass=="1234"){
            Session::put('a', true);
            return redirect('/admin/panel');
        }
        else{
            return redirect('/admin');
        }
    }

    public function retpan(){
        $a = Session::get('a'); // Получаем значение из сессии
        if(!$a){
            return redirect('/admin');
        }
        return view('panel');
    }

    public function kat(Request $request){
        $a = Session::get('a'); // Получаем значение из сессии
        if(!$a){
            return redirect('/admin');
        }

        $name = $request->input('kateg');
        $named=$request->input('catx');
        switch($request->input('action')){
            case 'dob':
            DB::table('types')->insert(['typ'=>"$name" ]);
            return redirect('/admin/panel/kateg');
            break;
            case 'del':
            DB::table('types')->where('typ','=',$named)->delete();
            break;
        }
        return view('adkateg',['data'=>Type::all()]);

    }

    public function colform(Request $request){
        $a = Session::get('a'); // Получаем значение из сессии
        if(!$a){
            return redirect('/admin');
        }

        $col=$request->input('colt');
        $cold=$request->input('colx');
        switch($request->input('action')){
            case 'dobc':
            DB::table('colors')->insert([
                'col'=>"$col"
            ]);
            return redirect('/admin/panel/color');
            break;
            case 'delc':
            DB::table('colors')->where('col','=',$cold)->delete();
            return redirect('/admin/panel/color');
            break;
        }
        return view('color',['data'=>Color::all()]);
    }

    public function obform(Request $request){
        $a = Session::get('a'); // Получаем значение из сессии
        if(!$a){
            return redirect('/admin');
        }

        $ob=$request->input('ob');
        $obd=$request->input('nx');
        switch($request->input('action')){
            case 'obdob':
            DB::table('obems')->insert([
                'obem'=>"$ob"
            ]);
            return redirect('/admin/panel/obem');
            break;
            case 'obdel':
            DB::table('obems')->where('obem','=',$obd)->delete();
            return redirect('/admin/panel/obem');
            break;
        }
        return view('obem',['data'=>Obem::all()]);
    }

    public function tovar(Request $request){
        $a = Session::get('a'); // Получаем значение из сессии
        if(!$a){
            return redirect('/admin');
        }

        $tip=$request->input('type');
        $podb=$request->input('podb');
        $name=$request->input('nazv');
        $obem=$request->input('obtov');
        $col=$request->input('obcol');
        $opis=$request->input('opis');
        $price=$request->input('price');
        switch($request->input('action')){
            case 'dob':
                $path2;
                $path1=$request->file('image')->store('uploads','public');
                if($request->file('poboch')==null){
                    $path2='';
                }
                else{
                    $path2=$request->file('poboch')->store('uploads','public');
                }
                DB::table('tovars')->insert(['type'=>"$tip",'podborka'=>"$podb", 'nazv'=>"$name", 'obem'=>"$obem", 'col'=>"$col", 'opis'=>"$opis", 'price'=>"$price",'photo'=>"$path1",'poboch'=>"$path2",'obchs'=>"$name $obem $col"]);
                return redirect('/admin/panel/tovar');
                break;
            case 'deltov':
                $ob =$request->input('obchs');
                DB::table('tovars')->where('obchs',$ob)->delete();
                return redirect('/admin/panel/tovar');
                break;
            case 'edtov':
                break;
        }
        return view('tov',['type'=>Type::all(),'obem'=>Obem::all(), 'color'=>Color::all(),'obchs'=>Tovar::all(),'podb'=>Podborki::all()]);
    }

    public function podb(Request $request){
        $a = Session::get('a'); // Получаем значение из сессии
        if(!$a){
            return redirect('/admin');
        }

        $type = $request->input('kat');
        $name = $request->input('podborka');
        switch ($request->input('action')) {
            case 'podb':
                DB::table('podborkis')->insert([
                    'type' => $type,
                    'nazv' => $name,
                    'photo' => $request->file('fotopod')->store('uploads', 'public'),
                ]);
                return redirect('/admin/panel/podborki');
                break;
            case 'podel':
                DB::table('podborkis')->where('nazv', $name)->delete();
                return redirect('/admin/panel/podborki');
                break;
        }
        return view('podborki');
    }


    public function slider(Request $request) {
        $tex = $request->input('tslide');
        $pob =$request->input('pslide');
        $tov = $request->input('tovar');
        $knopa=$request->input('tknop');
        $res=$request->input('res');
        $type = DB::table('tovars')->where('obchs', $tov)->value('type');
        $podb = DB::table('tovars')->where('obchs', $tov)->value('podborka');
        $id = DB::table('tovars')->where('obchs', $tov)->value('id');
        $ssilka;
        if($res==null){
            $ssilka = "$type/$podb/$id";
        }
        else{
            $ssilka=$res;
        }


        if ($request->input('action') == "slide") {

            $photoPath = $request->file('photo')->store('uploads', 'public');

            DB::table('sliders')->insert([
                'text' => $tex,
                'poboch'=>$pob,
                'knopka'=>$knopa,
                'photo' => $photoPath,
                'tovar' => $ssilka,
            ]);
            return redirect('admin/panel/slider');
        } elseif ($request->input('action') == "sl") {
            $ud = $request->input('slide');
            DB::table('sliders')->where('tovar', $ud)->delete();
            return redirect('admin/panel/slider');
        }
        return view('slider', ['data' => Tovar::all(), 'slide' => Slider::all()]);
    }
}
