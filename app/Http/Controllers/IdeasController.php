<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function index(){
        $ideas = Ideas::all();
        return view("welcome", [
            "ideas"=> $ideas
        ]);
    }
}
