<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Customer;
use App\Models\Industry;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // latest 3 blogs for homepage
        $blogs = Blog::latest()->take(3)->get();

         $teamMembers = Team::latest()->take(12)->get();
         $customers = Customer::latest()->get();
         $industries = Industry::latest()->take(12)->get(); 

        return view('pages.home', compact('blogs','teamMembers','customers','industries'));
    }
}
