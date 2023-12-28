<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

;

class PagesController extends Controller
{
    private $current_user;
    private $request_user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $username = $request->route('username'); // Отримання значення параметра 'username' з URL
            $this->current_user = Auth::user();
            $this->request_user = User::where('name', $username)->first();
            return $next($request);
        });
    }
    public function showHomePage()
    {
        $user = Auth::user();
        $posts = Post::all();
        return view('dashboard.pages.main.home', compact('user', 'posts'));
    }

    public function showViewPage(string $username)
    {
        return view('dashboard.pages.main.view_page', ['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showDonationPage()
    {
        return view('dashboard.pages.monetize.donations',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showMembershipPage()
    {
        return view('dashboard.pages.monetize.membership.membership',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showEnableMembershipPage()
    {
        return view('dashboard.pages.monetize.membership.enable_membership',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showExtrasPage()
    {
        return view('dashboard.pages.monetize.extras',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showCommissionsPage()
    {
        return view('dashboard.pages.monetize.commissions',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showViewPublishPage()
    {
        return view('dashboard.pages.publish.view',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showPostsPage()
    {
        return view('dashboard.pages.publish.posts.posts',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showPostsCreatePage()
    {
        return view('dashboard.pages.publish.posts.new_post',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }

    public function storePost(Request $request)
    {
        $filePath = false;
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
            'photo_path' => $filePath ? $filePath : null,
            'status_post' => $request->statuses_post,
            'user_id' => Auth::user()->id,
        ]);
        $newPost->save();
        return redirect()->back();
    }

    public function showPostsAudioCreatePage()
    {
        return view('dashboard.pages.publish.posts.audio',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showPostsAlbumCreatePage()
    {
        return view('dashboard.pages.publish.posts.album',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showMessagesPage()
    {
        return view('dashboard.pages.publish.messages',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showButtonsPage()
    {
        return view('dashboard.pages.settings.buttons',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showIntegrationsPage()
    {
        return view('dashboard.pages.settings.integrations',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showPayoutsPage()
    {
        return view('dashboard.pages.settings.payouts',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showSettingsPage()
    {
        return view('dashboard.pages.settings.settings',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }

    public function showViewProfilePage()
    {

        return view('dashboard.pages.profile.views',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showExtraProfilePage(string $username)
    {
        return view('dashboard.pages.profile.extra',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showMembershipProfilePage(string $username)
    {
        return view('dashboard.pages.profile.membership',['user' => $this->current_user, 'req_user' => $this->request_user]);
    }
    public function showPostProfilePage($username)
    {
        $userid = User::where('name', $username)->first();
        $posts = Post::where('user_id', $userid->id)->get();
        return view('dashboard.pages.profile.post',['user' => $this->current_user, 'req_user' => $this->request_user] )->with('posts', $posts);
    }
    public function showEditProfilePage()
    {
        return view('dashboard.pages.profile.edit_profile');
    }
}
