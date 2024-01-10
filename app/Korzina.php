<?php

namespace App;

use DB;
use App\Tovar;
use Illuminate\Database\Eloquent\Model;

class Korzina extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public static function add($prod){
        if($cart= self::where(["session_id"=>session()->getId(),"idtovar"=>$prod])->first()){
            $cart->kolich++;
            $cart->save();
        } else {
            $cena=DB::table('tovars')->select('price')->where('id',$prod)->first();
            $cart = self::create([
                "session_id"=>session()->getId(),
                "idtovar"=>$prod,
                "kolich"=>1,
                "itprice"=>$cena->price,
            ]);
        }
        return $cart;
    }
    public static function del($id){
        $cart=self::where('idtovar',"$id")->delete();
        return $cart;
    }

    public static function count($id){
        if($cart= self::where(["session_id"=>session()->getId(),"idtovar"=>$id])->first()){
            $cart->kolich++;
            $cart->save();
        }

        return $cart;
    }

    public static function dist($id){
        if($cart= self::where(["session_id"=>session()->getId(),"idtovar"=>$id])->first()){
            $cart->kolich--;
            $cart->save();
        }
        $cart=self::where('kolich',0)->delete();
        return $cart;
    }

    public static function ster(){
        $cart=self::where(["session_id"=>session()->getId()])->truncate();
        return $cart;
    }
}
