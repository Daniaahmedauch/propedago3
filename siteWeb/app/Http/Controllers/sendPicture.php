<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pictures;

class sendPicture extends Controller
{
    public function show(){
        
        $pictures = Pictures::all();
        return view('accueil',[
            "pictures" => $pictures
            ]);
    }
}
