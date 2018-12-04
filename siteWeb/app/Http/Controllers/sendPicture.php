<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Picture;

class sendPicture extends Controller
{
    public function show(){
        $pictures = Picture::all();
        return view('accueil', compact("accueil"));
    }
}
