<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\NewModule;

class CustomController extends Controller
{
    public function index() {

        $nm = NewModule::all();

        return view('custom.index', ['list' => $nm]);
    }
}
