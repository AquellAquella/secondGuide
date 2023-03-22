<?php

namespace App\Http\Controllers;

//import namespace for model
use App\Models\superheros;

use Illuminate\Http\Request;

class SuperherosController extends Controller
{
    public function index () {
        $page_title = "Super Heroes";

        //All access query to database table
        $superheros = superheros::all();

        return view('superheros', compact('page_title','superheros'));
    }

    public function index_women () {
        $page_title = "Super Heroes - Only Female Members";

        //Specific Access
        $women = superheros::where('gender','=','Female') -> get();

        return view('superheros_women', compact('page_title','women'));
    }

    public function index_men () {
        $page_title = "Super Heroes - Only Male Members";
        $men = superheros::where('gender','=','Male') -> get();
        return view('superheros_men', compact('page_title','men'));
    }
}
