<?php

namespace Ripon\ScratchCard\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ripon\ScratchCard\Models\ScratchModelItem;

class ScratchModel extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function giftitem(){
        return $this->belongsTo(ScratchModelItem::class,'item');
    }
}
