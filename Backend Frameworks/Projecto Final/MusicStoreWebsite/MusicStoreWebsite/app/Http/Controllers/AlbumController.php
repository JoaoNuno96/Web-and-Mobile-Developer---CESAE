<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\alert;

class AlbumController extends Controller
{
    public function allAlbuns()
    {
        //PHP LARAVEL
        $filter = request()->query("bandId");

        //PHP VANILLA
        $old_filter = isset($_GET["bandId"]) ? $_GET["bandId"] : null;

        $bands = $this->retrieveBandFromDatabase();

        if(!empty($filter))
        {
            $albuns = $this->retrieveAlbunsFromDatabaseFILTERED($filter);
        }
        else
        {
            $albuns = $this->retrieveAlbunsFromDatabase();
        }

        // dd($albuns);
        return view("albuns.showAllAlbuns",compact(["albuns","bands"]));
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

        $this->removePhotoFromResources($id);

        DB::table("albuns")
        ->where("id",$id)
        ->delete();

        return redirect()->route("album.all")->with("removeMessage","Album removed with success!");
    }

    public function changeAlbum($id)
    {
        $album = $this->retrieveSingleAlbumFromDatabase($id);
        return view("albuns.albunsChangeForm",compact("album"));
    }

    public function updateAlbum(Request $request)
    {
        $photo = null;

        $request->validate([
            "albumName" => "string|required|max:30",
            "OGdate" => "required",
            "photo" => "image"
        ]);

        if($request->hasFile("photo"))
        {
            $this->removePhotoFromResources($request->identificadorUnidoDeAlbum);
            $photo = Storage::putFile("albuns", $request->photo);
        }

        DB::table("albuns")
        ->where("id",$request->identificadorUnidoDeAlbum)
        ->update([
            "name" => $request->albumName,
            "date" => $request->OGdate,
            "image_source" => $photo,
        ]);

        return redirect()->route("album.all")->with("updateMessage","Album updated with success!");
    }

    private function removePhotoFromResources($id)
    {
        $obj = DB::table("albuns")
        ->where("id",$id)
        ->first();

        // dd($obj);

        Storage::delete($obj->image_source);
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
        ->select("albuns.*","bands.name as bandName","bands.id as bandId")
        ->orderBy('albuns.name', 'asc')
        ->simplePaginate(5);
    }

    private function retrieveAlbunsFromDatabaseFILTERED($filter)
    {
        return DB::table("albuns")
        ->where("fk_band_id",$filter)
        ->join("bands","bands.id","=","fk_band_id")
        ->select("albuns.*","bands.name as bandName","bands.id as bandId")
        ->orderBy('albuns.name', 'asc')
        ->simplePaginate(5);
    }

    private function retrieveBandFromDatabase()
    {
        return DB::table("bands")
        ->get();


    }
}
