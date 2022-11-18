<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    public function redirectUser(){
        if(auth()->user()->is_admin == 1){
            return redirect()->route('admin.dashboard');
        }
        if(auth()->user()->is_admin == 0){
            return redirect()->route('dashboard');
        }
    }
}
