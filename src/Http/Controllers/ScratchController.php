<?php

namespace Ripon\ScratchCard\Http\Controllers;

use App\Http\Controllers\Controller;
use Ripon\ScratchCard\Models\ScratchModel;
use Ripon\ScratchCard\ScratchCard;

class ScratchController extends Controller
{
    public function show($token){
        if(ScratchModel::where('token',$token)->exists()){
            $scratch =  ScratchCard::TokenbyFind($token);
            if($scratch->status ==1){
                ScratchCard::ID($scratch->id)->StatusDeactive();
                return view('scratch::scratchshow',compact("scratch"));
            }elseif($scratch->status ==0){
                return view('scratch::scratchshow',compact("scratch"));
            }
            
        }else{
            return abort(404);
        }
    }
}
