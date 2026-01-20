<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function index()
    {
        $ideas = Ideas::all();
        return view("welcome", [
            "ideas" => $ideas
        ]);
    }

    public function show(Ideas $idea)
    {
        return view("ideas.show", [
            "idea" => $idea
        ]);
    }

    public function update(Request $request, Ideas $idea)
    {
        $idea->update([
            "title" => $request->input("title"),
            "status" => $request->input("status"),
        ]);
        return redirect()->route("home");
    }
}
