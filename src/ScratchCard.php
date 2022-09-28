<?php

namespace Ripon\ScratchCard;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use Ripon\ScratchCard\Models\ScratchModel;
use Ripon\ScratchCard\Models\ScratchModelItem;

class ScratchCardClass
{
    private $dataStore;
    public function insert($data)
    {
        if (ScratchModelItem::where("status", 1)->exists()) {
            $item = ScratchModelItem::inRandomOrder()->first();
            $scratch = new ScratchModel();
            $scratch->token = Str::random(32);
            $scratch->name = $data[0];
            $scratch->mobile = $data[1];
            $scratch->item = $item->id;
            $scratch->status = $data[3];
            $scratch->save();
        }
    }
    public function update($id, $data)
    {
        if (ScratchModelItem::where("status", 1)->exists()) {
            $item = ScratchModelItem::inRandomOrder()->first();
            $scratch = ScratchModel::findOrFail($id);
            $scratch->token = Str::random(32);
            $scratch->name = $data[0];
            $scratch->mobile = $data[1];
            $scratch->item = $item->id;
            $scratch->status = $data[3];
            $scratch->save();
        }
    }
    public function ScratchGet($perpage)
    {
        return ScratchModel::with('giftitem')->paginate($perpage);
    }

    public function insertItem($data)
    {
        $scratch_item = new ScratchModelItem();
        $scratch_item->item = $data[0];
        $scratch_item->status = $data[1];
        $scratch_item->save();
    }
    public function updateItem($id,$data)
    {
        $scratch_item = ScratchModelItem::findOrFail($id);
        $scratch_item->item = $data[0];
        $scratch_item->status = $data[1];
        $scratch_item->save();
    }

    public function ScratchItemGet($perpage)
    {
        return ScratchModelItem::paginate($perpage);
    }

    public function FindByMobile($mobile){
         return ScratchModel::where('mobile',$mobile)->first();
    }
    public function TokenbyFind($token){
        return ScratchModel::with("giftitem")->where('token',$token)->first();
   }
    public function ID($id){
        $this->dataStore = ScratchModel::where('id',$id)->first();
        return $this;
    }
    public function StatusDeactive(){
       $a =  $this->dataStore;
       $b = ScratchModel::findOrFail($a->id);
       $b->status = 0;
       $b->save();
    }
    public function StatusAeactive(){
        $a =  $this->dataStore;
        $b = ScratchModel::findOrFail($a->id);
        $b->status = 1;
        $b->save();
     }

}

app()->bind('scratchcard', function () {
    return new ScratchCardClass;
});

class ScratchCard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'scratchcard';
    }
}
