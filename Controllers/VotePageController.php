<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserVote;
use App\Models\Suggestion;
use App\Models\Vote;


class VotePageController extends Controller
{
    public function index()
    {
        $votepages = Suggestion::all();
        return view('votepage.index', compact('votepages'));
    }

    public function vote($id){
        $suggestion = Suggestion::where('id','=', $id)->first();
        $vote = Vote::all();
        return view('votepage.create', compact('suggestion','vote'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'suggestion_id' => 'required',
            'vote_id' => 'required',
        ]);
        UserVote::create($request->post());

        return redirect()->route('votepage.index')->with('success','คุณได้ลงคะแนนโครงการเรียบร้อย');
    }

}
