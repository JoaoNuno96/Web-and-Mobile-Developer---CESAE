<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function allAlbuns()
    {
        $albuns = $this->retrieveAlbunsFromDatabase();
        // dd($albuns);
        return view("albuns.showAllAlbuns",compact("albuns"));
    }

    public function addForm()
    {
        $bands = $this->retrieveAlbumFromDatabase();
        return view("albuns.albunsForm",compact("bands"));
    }

    public function addAlbum(Request $request)
    {
        $photo = null;

        $request->validate([
            "albumName" => "string|required|max:30",
            "OGdate" => "required",
            "photo" => "image"
        ]);

        if($request->hasFile("photo"))
        {
            $photo = Storage::putFile("albuns", $request->photo);
        }

        DB::table("albuns")
        ->insert([
            "name" => $request->albumName,
            "date" => $request->OGdate,
            "image_source" => $photo,
            "fk_band_id" => $request->band,
        ]);

        return redirect()->route("album.all")->with("addMessage","Album added with success!");
    }

    public function showAlbum($id)
    {
        $album = $this->retrieveSingleAlbumFromDatabase($id);
        return view("albuns.showSingleAlbum",compact("album"));
    }

    public function removeAlbum($id)
    {
        DB::table("albuns")
        ->where("id",$id)
        ->delete();

        return redirect()->route("album.all")->with("removeMessage","Album removed with success!");
    }

    private function retrieveSingleAlbumFromDatabase($id)
    {
        return DB::table("albuns")
        ->where("albuns.id", $id)
        ->join("bands","bands.id","=","fk_band_id")
        ->select("albuns.*","bands.name as bandName")
        ->first();
    }

    private function retrieveAlbumFromDatabase()
    {
        return DB::table("bands")
        ->get();
    }


    private function retrieveAlbunsFromDatabase()
    {
        return DB::table("albuns")
        ->join("bands","bands.id","=","fk_band_id")
        ->select("albuns.*","bands.name as bandName")
        ->get();
    }
}
