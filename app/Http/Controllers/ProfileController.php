<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function editProfile(Request $request)
    {
        Log::info($request);
        // save information about user and save avatar in public_test, output information in popup and page profile view
    }
}
