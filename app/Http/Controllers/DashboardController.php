<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\Customer;
use App\Models\Industry;
use App\Models\Service;
use App\Models\User;
use App\Models\Team;
use App\Models\Portfolio;
use App\Models\Contact;
use App\Models\SeoRequest;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
     public function index()
    {
        $blogsCount = Blog::count();
        $teamCount = Team::count();       // Replace with Team::count() later
        $customersCount = Customer::count();  // Replace with Customer::count() later
        $usersCount = User::count();
        $industriesCount = Industry::count();
        $careersCount = Career::count();
        $portfolioCount = Portfolio::count();
        $contactsCount = Contact::count();
        $seoRequestsCount = SeoRequest::count();
        $servicesCount = Service::count();


        return view('pages.admin.dashboard', compact(
            'blogsCount',
            'teamCount',
            'customersCount',
            'usersCount',
            'industriesCount',
            'careersCount',
            'portfolioCount',
            'contactsCount',
            'servicesCount',
            'seoRequestsCount',
        ));
    }
}
