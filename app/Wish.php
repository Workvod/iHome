<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
	protected $guarded = [];
    public $timestamps = false;
    public static function add($prod){
        if($wish= self::where(["session_id"=>session()->getId(),"idtovar"=>$prod])->first()){
            $wish->kolich=1;
            $wish->save();
        } else {
            $wish = self::create([
                "session_id"=>session()->getId(),
                "idtovar"=>$prod,
                "kolich"=>1,
            ]);
        }
        return $wish;
    }
    public static function del($id){
        $wish=self::where('idtovar',"$id")->delete();
        return $wish;
    }
    public static function ster(){
        $wish=self::where(["session_id"=>session()->getId()])->truncate();
        return $wish;
    }
}
