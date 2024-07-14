<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ProfileController extends Controller
{
    public function index(){
        $profile = Customer::take(1)->get();
        return view('profile.index', ['profile' => $profile]);
    }
}
