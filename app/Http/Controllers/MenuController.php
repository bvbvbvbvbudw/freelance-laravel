<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{
    //
    public function getUserMenu()
    {
        $menu = array();
        $user = Auth::user();

        if(!is_null($user)){
            $menu['/home'] = 'Dashboard';

            if($user -> hasRole('Client')){
                $menu['/postjob'] = 'Post a Job';
                $menu['/editjob'] = 'Edit a Job';
            }
            if($user->hasRole('Freelancer')){
                $menu['/jobs'] = 'Find a Job';

            }
        }
        return $menu;
    }
}
