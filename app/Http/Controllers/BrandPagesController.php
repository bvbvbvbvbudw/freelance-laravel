<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BrandPagesController extends Controller
{
    public function dashboardPage()
    {
        return view('brand.page.brands');
    }
    public function campaignsPage()
    {
        return view('brand.page.brands_statistic');
    }
    public function campaignsContractPage()
    {
        return view('brand.page.brands_statistic_contract');
    }
    public function myJobsPage()
    {
        return view('brand.page.my_jobs');
    }
    public function newJobPage()
    {
        return view('brand.page.new_job');
    }
    public function jobDetailsPage()
    {
        return view('brand.page.my_job_details');
    }
    public function explorePage()
    {
        return view('brand.page.directory_page');
    }
    public function commissionsPage()
    {
        return view('brand.page.commissions');
    }
    public function messagesPage()
    {
        return view('brand.page.messages');
    }
    public function buttonsPage()
    {
        return view('brand.page.settings.buttons');
    }
    public function integrationsPage()
    {
        return view('brand.page.settings.integrations');
    }
    public function payoutsPage()
    {
        return view('brand.page.settings.payouts');
    }
    public function settingsPage()
    {
        return view('brand.page.settings.settings');
    }
}
