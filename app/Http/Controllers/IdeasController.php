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

    public function create(Request $request){
        $request->validate([
            "title" => "required|string|max:255",
            "status" => "required|string|in:done,pending,in-progress"
        ]);
        Ideas::create(
            [
                "title" => $request->title,
                "status" => $request->status,
            ]
        );
        return redirect()->route("home");
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

    public function destroy(Ideas $idea)
    {
        $idea->delete();
        return redirect()->route("home");
    }
}
