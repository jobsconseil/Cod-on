<?php

namespace App\Http\Controllers\Front\Tag;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        return view('Back.admin');
    }
}
