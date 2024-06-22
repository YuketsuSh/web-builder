<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdminController extends Controller{

    public function __construct(){
        $this->middleware('role:admin|moderator');
    }

    public function index(){
        return view('admin.dashboard');
    }

}
