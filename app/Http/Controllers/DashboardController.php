<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
        $blogsCount = Blog::count();
        $teamCount = Team::count();       // Replace with Team::count() later
        $customersCount = 0;  // Replace with Customer::count() later
        $usersCount = User::count();

        return view('pages.admin.dashboard', compact(
            'blogsCount',
            'teamCount',
            'customersCount',
            'usersCount'
        ));
    }
}
