<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminOnly;
use Illuminate\Http\Request;

class PainelAdminController extends Controller
{
 
    public function index(){
        return view('paineladmin');
    }
}
