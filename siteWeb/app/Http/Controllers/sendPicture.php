<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pictures;

class sendPicture extends Controller
{
    public function show(){
        
        $pictures = Pictures::all();
        return view('accueil',[
            "pictures" => $pictures
            ]);
    }

    public function sendJson($id)
    {
    	$pictures = Pictures::where('picture_id', $id)->get();
    	echo json_encode($pictures);
    }
}
