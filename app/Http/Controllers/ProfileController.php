<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function editProfile(Request $request)
    {
        $avatar = false;
        if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar')->store('uploads/avatars', 'public_test');
        }
        $user = Auth::user();
        $user_info = $user->info;
        $user->name = isset($request->username) ? $request->username : "";
        $user->save();
        $user_info->description = isset($request->description) ? $request->description : "";
        $user_info->avatar = isset($avatar) ? $avatar : "";
        $user_info->creating = isset($request->creating) ? $request->creating : "";
        $user_info->yt_link = isset($request->yt_link) ? $request->yt_link : "";
        $user_info->website = isset($request->website) ? $request->website : "";
        $user_info->username_link = isset($request->username_link) ? $request->username_link : "";
        $user_info->save();
        return redirect('/' . $user->name);
    }
}
