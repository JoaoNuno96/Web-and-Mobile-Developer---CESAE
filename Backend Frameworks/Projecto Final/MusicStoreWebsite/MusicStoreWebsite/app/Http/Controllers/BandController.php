<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BandController extends Controller
{
    //RECEIVE ALL BANDS
    public function allBands()
    {
        $bands = $this->recieveAllBandsFromDatabase();

        return view("bands.showBands",compact("bands"));
    }

    public function addForm()
    {
        return view("bands.bandsForm");
    }

    //ADD BAND TO DATABASE
    public function addBands(Request $request)
    {
        $photo = null;

        $request->validate([
            "name" => "string|required|max:20",
            "OGdate" => "required",
            "genre" => "required",
            "members" => "required",
            "photo" => "image"
        ]);

        if($request->hasFile("photo"))
        {
            $photo = Storage::putFile("bands", $request->photo);
        }

        DB::table("bands")
        ->insert([
            "name" => $request->name,
            "birthDate" => $request->OGdate,
            "genre" => $request->genre,
            "members" => $request->members,
            "path" => $photo
        ]);

        return redirect()->route("band.all")->with("addMessage","Band add with success!");
    }

    public function showArtist($id)
    {
        $band = $this->showSingleBandFromDatabase($id);

        return view("bands.showSingleBand",compact("band"));
    }

    public function showSingleBandFromDatabase($id)
    {
        return DB::table("bands")
        ->where("id", $id)
        ->first();
    }

    public function removeArtist($id)
    {
        DB::table("bands")
        ->where("id",$id)
        ->delete();

        return redirect()->route("band.all")->with("removeMessage","Band removed with success");
    }

    //GET ALL USERS FROM DATABASE
    private function recieveAllBandsFromDatabase()
    {
        return DB::table("bands")
        ->get();
    }
}
