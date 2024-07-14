<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;
use App\Models\Vote;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suggestions = Suggestion::orderBy('id')->paginate(10);
        return view('suggestion.index', ['suggestions' => $suggestions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suggestion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'topic_name' => 'required',
            's_detail' => 'required',
        ]);
        Suggestion::create($request->post());

        return redirect()->route('suggestion.index')->with('success','suggestion Type has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Suggestion $suggestion)
    {
        return view('suggestion.show',compact('suggestion',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suggestion $suggestion)
    {

        return view('suggestion.edit',compact('suggestion',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suggestion $suggestion)
    {
        $request->validate([
            'topic_name' => 'required',
            's_detail' => 'required',
        ]);
        $suggestion->fill($request->post())->save();

        return redirect()->route('suggestion.index')->with('success','suggestion has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suggestion $suggestion)
    {
        $suggestion->delete();
        return redirect()->route('suggestion.index')->with('success','suggestion has been deleted');
    }
}
