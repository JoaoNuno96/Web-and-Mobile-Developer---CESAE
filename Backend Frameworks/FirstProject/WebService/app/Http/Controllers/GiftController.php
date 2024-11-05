<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiftController extends Controller
{
    public function showGifs()
    {
        $gifts = $this->receiveGifsFromDatabase();

        return view("gifts.gifts_show",compact("gifts"));
    }

    public function showGiftSingle($id)
    {
        $gift = $this->receiveOneGiftFromDatabase($id);

        return view("gifts.gifts_single_show",compact("gift"));
    }


    public function removeGift($id)
    {
        $this->removeSelectedItemFromDatabase($id);
        return back();
    }

    private function receiveGifsFromDatabase()
    {
        return DB::table("gifts")
        ->join("users","users.id","=","user_fk")
        ->select("gifts.*","users.name as userName")
        ->get();
    }

    private function receiveOneGiftFromDatabase($id)
    {
        return DB::table("gifts")
        ->where("gifts.id", $id)
        ->join("users","users.id","=","gifts.user_fk")
        ->select("gifts.*","users.name as userName")
        ->first();
    }

    private function removeSelectedItemFromDatabase($id)
    {
        DB::table("gifts")
        ->where("id",$id)
        ->delete();
    }
}
