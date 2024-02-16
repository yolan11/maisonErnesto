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
        return view('Admin.AdminPage.index');
    }

    public function showAdminUser()
    {
        $users = User::all();
        return view('Admin.AdminPage.user', compact('users'));
    }

    public function showAdminBrand()
    {
        $brands = Brand::all();

        if ($brands->isEmpty()) {
            return redirect('/dashboard/brand/error');
        }

        return view('Admin.AdminPage.brand', compact('brands'));
    }

    public function showAdminBrandError()
    {
        return view('Admin.AdminPage.no-brand-found');
    }


}
