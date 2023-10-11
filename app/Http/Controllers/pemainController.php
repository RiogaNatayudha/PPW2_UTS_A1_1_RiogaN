<?php

namespace App\Http\Controllers;

use App\Models\pemain;
use Illuminate\Http\Request;

class pemainController extends Controller
{
    public function store(){
        $pemain = pemain::all();
        return view ('store', compact('pemain'));
    }
}
