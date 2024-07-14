<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;

class SuggesController extends Controller
{
    public function index(){
        $sugges = Suggestion::all();
        return view('sugges.index', compact('sugges'));
    }

    public function create()
    {
        return view('sugges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic_name' => 'required',
            's_detail' => 'required',
        ],
        [
            'topic_name.required' => 'กรุณาระบุชื่อหัวข้อ',
            's_detail.required' => 'กรุณาระบุรายละเอียดหัวข้อ',
        ]);
        Suggestion::create($request->post());

        return redirect()->route('sugges.index')->with('success','หัวข้อของคุณถูกเพิ่มในระบบเเล้ว!');
    }

}
