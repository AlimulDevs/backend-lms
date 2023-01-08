<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function index()
    {
        $data = DB::table("mentorings")->get();

        return view("index", compact("data"));
    }
    public function createIndex()
    {


        return view("create");
    }
    public function delete($id)
    {
        $data = DB::table("mentorings")->where("id", $id)->delete();

        return redirect("/",)->with("success", "Berhasil Menghapus Data");
    }
}
