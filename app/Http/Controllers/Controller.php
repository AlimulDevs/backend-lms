<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
    public function create(Request $request)
    {
        $file = $request->file('foto_leader');
        if ($file == null) {
            return redirect('/createIndex')->with("failed", "failed Create Data");
        }
        $nameFile = time() . $file->getClientOriginalName();
        if ($file->getClientMimeType() == 'application/pdf') {
            return redirect('/createIndex')->with("failed", "File harus berupa png or jpg");
        }
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';


        // upload file
        $file->move($tujuan_upload, $nameFile);
        $nameFile = url('/images/' . $nameFile);




        DB::table("mentorings")->insert([
            "project_name" => $request->project_name,
            "client" => $request->client,
            "name_leader" => $request->name_leader,
            "email_leader" => $request->email_leader,
            "foto_leader" => $nameFile,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "progress" => $request->progress,
        ]);

        return redirect("/createIndex")->with("success", "Success Create Data");
    }
    public function delete($id)
    {
        $data = DB::table("mentorings")->where("id", $id)->delete();

        return redirect("/",)->with("success", "Berhasil Menghapus Data");
    }
}
