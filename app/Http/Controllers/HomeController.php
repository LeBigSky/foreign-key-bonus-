<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        $genders= Gender::all();
        $members= Member::all();
        return view ('home', compact('genders', 'members'));
    }
}
