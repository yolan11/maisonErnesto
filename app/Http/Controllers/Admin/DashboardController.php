<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all(); // Récupérez tous les utilisateurs de la table "users"

        return view('adminView.dashboard', ['users' => $users]);
    }
}
