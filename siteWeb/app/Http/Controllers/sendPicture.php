<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pictures;

class sendPicture extends Controller
{
    public function show(){
        $pictures = Picture::all();
        return view('accueil', compact("accueil"));
    }

    public function sendJson($id)
    {
    	$pictures = Pictures::where('picture_id', $id)->get();
    	echo json_encode($pictures);
    }
}
