<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function showHomePage()
    {
        $user = Auth::user();
        $posts = Post::all();
        return view('dashboard.pages.main.home', compact('user', 'posts'));
    }

    public function showViewPage()
    {
        return view('dashboard.pages.main.view_page');
    }
    public function showDonationPage()
    {
        return view('dashboard.pages.monetize.donations');
    }
    public function showMembershipPage()
    {
        return view('dashboard.pages.monetize.membership.membership');
    }
    public function showEnableMembershipPage()
    {
        return view('dashboard.pages.monetize.membership.enable_membership');
    }
    public function showExtrasPage()
    {
        return view('dashboard.pages.monetize.extras');
    }
    public function showCommissionsPage()
    {
        return view('dashboard.pages.monetize.commissions');
    }
    public function showViewPublishPage()
    {
        return view('dashboard.pages.publish.view');
    }
    public function showPostsPage()
    {
        return view('dashboard.pages.publish.posts.posts');
    }
    public function showPostsCreatePage()
    {
        return view('dashboard.pages.publish.posts.new_post');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'permission_post' => 'required|integer',
            'statuses_post' => 'required|integer',
            'file.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filePath = $file->store('uploads/posts', 'public_test');
                Log::info('-------------');
                Log::info($file);
                Log::info($filePath);
                Log::info('-------------');
            }
        }
        $newPost = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'permission' => $request->permission_post,
            'photo_path' => $filePath,
            'status_post' => $request->statuses_post,
            'user_id' => Auth::user()->id,
        ]);
        $newPost->save();
        return redirect()->back();
    }

    public function showPostsAudioCreatePage()
    {
        return view('dashboard.pages.publish.posts.audio');
    }
    public function showPostsAlbumCreatePage()
    {
        return view('dashboard.pages.publish.posts.album');
    }
    public function showMessagesPage()
    {
        return view('dashboard.pages.publish.messages');
    }
    public function showButtonsPage()
    {
        return view('dashboard.pages.settings.buttons');
    }
    public function showIntegrationsPage()
    {
        return view('dashboard.pages.settings.integrations');
    }
    public function showPayoutsPage()
    {
        return view('dashboard.pages.settings.payouts');
    }
    public function showSettingsPage()
    {
        return view('dashboard.pages.settings.settings');
    }

    public function showViewProfilePage()
    {
        return view('dashboard.pages.profile.views');
    }
    public function showExtraProfilePage()
    {
        return view('dashboard.pages.profile.extra');
    }
    public function showMembershipProfilePage()
    {
        return view('dashboard.pages.profile.membership');
    }
    public function showPostProfilePage($username)
    {
        $userid = User::where('name', $username)->first();
        $posts = Post::where('user_id', $userid->id)->get();
        return view('dashboard.pages.profile.post')->with('posts', $posts);
    }
    public function showEditProfilePage()
    {
        return view('dashboard.pages.profile.edit_profile');
    }
}
