<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Livre;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $brands = Brand::all();
        return view('adminView.dashboard', compact('users','brands'));
    }


}