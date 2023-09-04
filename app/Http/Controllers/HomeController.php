<?php

namespace App\Http\Controllers;

use App\Models\Pagerank;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $sites = Pagerank::all();

        return view('welcome')
            ->with("sites", $sites);
    }
}
