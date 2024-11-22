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
        //PHP LARAVEL
        // $procura = request()->query("procura") ? request()->query("procura") : null;

        //PHP VANILLA
        $procura = isset($_GET["procura"]) ? $_GET["procura"] : null;

        $bands = $this->recieveAllBandsFromDatabase($procura);

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
        $albunsImages = $this->showAlbunsPHOTOSFormSingleBand($id);

        // dd($albunsImages);

        return view("bands.showSingleBand",compact("band","albunsImages"));
    }

    public function showSingleBandFromDatabase($id)
    {
        return DB::table("bands")
        ->where("id", $id)
        ->first();
    }

    public function showAlbunsPHOTOSFormSingleBand($id)
    {
        return DB::table("bands")
        ->where("bands.id", $id)
        ->join("albuns","albuns.fk_band_id","=","bands.id")
        ->select("albuns.id","albuns.image_source")
        ->get();
    }

    public function removeArtist($id)
    {

        $this->removePhotoFromResources($id);

        DB::table("bands")
        ->where("id",$id)
        ->delete();

        return redirect()->route("band.all")->with("removeMessage","Band removed with success");
    }

    public function formArtist($id)
    {
        $band = $this->showSingleBandFromDatabase($id);

        return view("bands.bandsChangeForm",compact("band"));
    }

    public function updateArtist(Request $request)
    {
        // dd($request->all());
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
            $this->removePhotoFromResources($request->identificadorBanda);
            $photo = Storage::putFile("bands", $request->photo);
        }

        DB::table("bands")
        ->where("id",$request->identificadorBanda)
        ->update([
            "name" => $request->name,
            "birthDate" => $request->OGdate,
            "genre" => $request->genre,
            "members" => $request->members,
            "path" => $photo
        ]);

        return redirect()->route("band.all")->with("updateMessage","Band updated with success!");
    }

    //GET ALL USERS FROM DATABASE
    private function recieveAllBandsFromDatabase($procura)
    {
        $query = DB::table("bands");

        if($procura)
        {
            $query = $query->where("name", "LIKE" , "%{$procura}%");
        }

        $query = $query
        ->orderBy('name', 'asc')
        ->select("bands.*")
        ->addSelect(DB::raw('(SELECT COUNT(*) FROM albuns WHERE albuns.fk_band_id = bands.id) as albuns_count'))
        ->simplePaginate(5);

        return $query;
    }

    private function removePhotoFromResources($id)
    {
        $obj = DB::table("bands")
        ->where("id",$id)
        ->first();

        // dd($obj);

        Storage::delete($obj->path);
    }

}
