<?php

namespace App\Http\Controllers;

use DB;
use App\Color;
use App\Tovar;
use App\Obem;
use App\Type;
use App\Wish;
use App\Korzina;
use App\City;
use App\Podborki;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainController extends Controller
{
    public function index(){
        $array=[];
        for ($i=0; $i < 8; $i++) {
            $array[$i]= rand(0,15);
        }
        $min = DB::table('sliders')->min('id');
        return view('index',['param' => Tovar::where('id', $array[0])->orWhere('id', $array[1])
            ->orWhere('id', $array[2])
            ->orWhere('id', $array[3])
            ->orWhere('id', $array[4])
            ->orWhere('id', $array[5])
            ->orWhere('id', $array[6])
            ->orWhere('id', $array[7])
            ->get(),'nachsl'=>Slider::where('id',$min)->get(), 'slider'=>Slider::all()->where('id','!=',$min)]);
    }

    public function index2(Request $request){
        $b = $request->input('searchQueryInput');
        return view('search',['param'=>Tovar::where('obchs','ilike',"%$b%")->get()]);
    }

    public function katalog(){
        return view('shop');
    }
    public function dostavka(){
        return view('testimonial');
    }
    public function garant(){
        return view('why');
    }
    public function zakaz(){
        return view('order');
    }

    public function categ($typ){
            return view('shadow',['data'=>$typ,'param'=>Podborki::all()
                ->where('type',$typ)]);
   }


    public function categ2(Request $request){
        $b = $request->input('searchQueryInput');
        return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
    }

    public function prod($typ,$prod, Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        return view('last',['data'=>$typ,'ss'=>$prod,'param'=>Tovar::all()->where('podborka',$prod)]);
    }


    public function last($typ,$prod,$tov){
        return view('product',['param'=>Tovar::all()->where('id',$tov)]);
    }

    public function todo(Request $request, $typ, $prod,$tov){
        switch($request->input('action')){
            case 'searchQuerySubmit':
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
            case'tocart':
            Korzina::add($tov);
            return redirect("/$typ/$prod/$tov");
            break;
            case 'towish':
            Wish::add($tov);
            return redirect("/$typ/$prod/$tov");
            break;
        }
    }

    public function cart(){
        $tovar=DB::table('korzinas')
            ->where('session_id','=',session()->getId())
            ->leftJoin('tovars', 'korzinas.idtovar', '=', 'tovars.id')
            ->get();
        $price=0;
        foreach($tovar as $k){
            $price=$price+(($k->kolich)*($k->itprice));
        }

        return view('korzina',['tovar'=>$tovar,'price'=>$price]);
    }

    public function docart(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        $e=$request->input('action');
        if(str_contains($e,'uw')){
            $a=str_replace('uw','',$e);
            Korzina::del($a);
            return redirect('/cart');
        }
        if(str_contains($e,'ac')){
            $a=str_replace('ac','',$e);
            Korzina::count($a);
            return redirect('/cart');
        }
        if(str_contains($e,'dc')){
            $a=str_replace('dc','',$e);
            Korzina::dist($a);
            return redirect('/cart');
        }
        if($e=="ster"){
            Korzina::ster();
            return redirect('/cart');
        }
        if($e=="oform"){
            $tovar=DB::table('korzinas')
            ->where('session_id',session()->getId())
            ->leftJoin('tovars','korzinas.idtovar','=','tovars.id')
            ->get();
            $price=0;
            foreach($tovar as $k){
                $price=$price+(($k->kolich)*($k->itprice));
            }

            return view('order',['price'=>$price,'tovars'=>$tovar,'city'=>City::all()]);
        }
    }

    public function wish(){
        $tovar=DB::table('wishes')
            ->where('session_id','=',session()->getId())
            ->leftJoin('tovars', 'wishes.idtovar', '=', 'tovars.id')
            ->get();
        return view('favor',['tovar'=>$tovar]);
    }

    public function dowish(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        $e=$request->input('action');
        if(str_contains($e,'uw')){
            $a=str_replace('uw','',$e);
            Wish::del($a);
            return redirect('/wish');
        }
        else if($e=="yp"){
            Wish::ster();
            return redirect('/wish');
        }else if($e=="zloi"){
            $id = DB::table('wishes')
            ->where('session_id','=',session()->getId())
            ->pluck('idtovar');
            #dd("$id");
            foreach($id as $el){
                Korzina::add($el);
            }
            return redirect('/wish');
        }

    }

    public function order(){
        return view('order',['type'=>Type::all()]);
    }

    public function toorder(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        $tovar=DB::table('korzinas')
            ->where('session_id',session()->getId())
            ->leftJoin('tovars','korzinas.idtovar','=','tovars.id')
            ->get();
        $price=0;
        foreach($tovar as $k){
            $price=$price+(($k->kolich)*($k->itprice));
        }

        $e = $request->input('action');
        $zakaz['idt']=$request->input('tov');
        $zakaz['city']=$request->input('cit')." ".
        $request->input('uliza')." ".
        $request->input('xata');
        $zakaz['fio']=$request->input('nam');
        $zakaz['nomer']=$request->input('tel');
        $zakaz['summ']=$price;
        if($e=="otpr"){
            Korzina::ster();
            DB::table('zayavs')->insert($zakaz);
            return view('boba');
        }
    }

    public function insoon(Request $request){
        return view('insoon');
    }

    public function rassrochka(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        return view('rassr');
    }

    public function tradein(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        return view('tradein');
    }

    public function garantia(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        return view('garantia');
    }

    public function dostav(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        return view('dostavka');
    }

    public function agreement(Request $request){
        if($request->input('action')=="searchQuerySubmit"){
            $b = $request->input('searchQueryInput');
            return view('search',['param'=>Tovar::where('obchs','like',"$b%")->get()]);
        }
        return view('agreement');
    }
}
