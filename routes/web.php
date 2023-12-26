<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::middleware(['auth'])->group(function (){



    Route::prefix('app')->group(function () {
        // login and registration
//        Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
//        Route::get('/donations', [PagesController::class, 'showDonationPage'])->name('viewDonate');
//        Route::get('/membership', [PagesController::class, 'showMembershipPage'])->name('viewMembership');

//        Route::get('/membership/enable', [PagesController::class, 'showEnableMembershipPage'])->name('viewEnableMembership');


//        Route::get('/extras', [PagesController::class, 'showExtrasPage'])->name('viewExtras');
//        Route::get('/commissions', [PagesController::class, 'showCommissionsPage'])->name('viewCommissions');
//        Route::get('/messages', [PagesController::class, 'showMessagesPage'])->name('viewMessagePage');

//        Route::resource('/jobs', JobsController::class);
//        Route::get('/jobs/{id}', [JobsController::class, 'show'])->name('show');

//        Route::get('/integrations', [PagesController::class, 'showIntegrationsPage'])->name('viewIntegrationsPage');
//        Route::get('/payouts', [PagesController::class, 'showPayoutsPage'])->name('showPayoutsPage');
//        Route::get('/settings', [PagesController::class, 'showSettingsPage'])->name('viewSettingsPage');


//        Route::get('/view/publish', [PagesController::class, 'showViewPublishPage'])->name('viewPublishPage');

//        Route::get('/post', [PagesController::class, 'showPostsPage'])->name('viewPostsPage');

//        Route::get('/post/new', [PagesController::class, 'showPostsCreatePage'])->name('viewPostsCreatePage');
//        Route::get('/post/audio/new', [PagesController::class, 'showPostsAudioCreatePage'])->name('viewPostsAudioCreatePage');
//        Route::get('/post/album/new', [PagesController::class, 'showPostsAlbumCreatePage'])->name('viewPostsAlbumCreatePage');
//        Route::post('/post/store', [PagesController::class, 'storePost'])->name('post_create');

//        Route::get('/integrations', [PagesController::class, 'showIntegrationsPage'])->name('viewIntegrationsPage');


//    Route::get('/{username}', [PagesController::class, 'showViewPage'])->name('viewPage');
//    Route::get('/{username}/views', [PagesController::class, 'showViewProfilePage'])->name('viewViewProfilePage');
//    Route::get('/{username}/membership', [PagesController::class, 'showMembershipProfilePage'])->name('viewMembershipProfilePage');
//    Route::get('/{username}/post', [PagesController::class, 'showPostProfilePage'])->name('viewPostProfilePage');
//    Route::get('/{username}/extra', [PagesController::class, 'showExtraProfilePage'])->name('viewExtraProfilePage');
//    Route::get('/{username}/edit', [PagesController::class, 'showEditProfilePage'])->name('viewEditProfilePage');

    });



    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/jobs', JobsController::class)->names('viewJobsPage');
    Route::get('/jobs/{id}', [JobsController::class, 'show'])->name('show');

    Route::post('/favorite', [FavoriteController::class, 'addFavorite'])->name('addFavorite');
    Route::post('/threads', [ThreadController::class, 'createThread'])->name('createThread');
//Route::post('/create-message/{thread}', [ThreadController::class, 'createMessage'])->name('createMessage');
    Route::get('/threads/{id}', [ThreadController::class, 'showThreads']);
    Route::post('/threads/{id}/newmessage', [ThreadController::class, 'createMessage'])->name('createMessage');



//pages
    Route::get('/dashboard', [PagesController::class, 'showHomePage'])->name('mainPage');


    Route::get('/donations', [PagesController::class, 'showDonationPage'])->name('viewDonate');
    Route::get('/membership', [PagesController::class, 'showMembershipPage'])->name('viewMembershipPage');
    Route::get('/membership/enable', [PagesController::class, 'showEnableMembershipPage'])->name('viewEnableMembership');
    Route::get('/extras', [PagesController::class, 'showExtrasPage'])->name('viewExtrasPage');
    Route::get('/commissions', [PagesController::class, 'showCommissionsPage'])->name('viewCommissionsPage');


    Route::get('/view/publish', [PagesController::class, 'showViewPublishPage'])->name('viewPublishPage');
    Route::get('/post', [PagesController::class, 'showPostsPage'])->name('viewPostsPage');

    Route::get('/post/create', [PagesController::class, 'showPostsCreatePage'])->name('viewPostsCreatePage');
    Route::post('/post/store', [PagesController::class, 'storePost'])->name('post_create');
    Route::get('/post/audio', [PagesController::class, 'showPostsAudioCreatePage'])->name('viewPostsAudioCreatePage');
    Route::get('/post/album', [PagesController::class, 'showPostsAlbumCreatePage'])->name('viewPostsAlbumCreatePage');

    Route::get('/messages', [PagesController::class, 'showMessagesPage'])->name('viewMessagePage');


    Route::get('/buttons', [PagesController::class, 'showButtonsPage'])->name('viewButtonsPage');
    Route::get('/integrations', [PagesController::class, 'showIntegrationsPage'])->name('viewIntegrationsPage');
    Route::get('/payouts', [PagesController::class, 'showPayoutsPage'])->name('viewPayoutsPage');
    Route::get('/settings', [PagesController::class, 'showSettingsPage'])->name('viewSettingsPage');

    //profile
    Route::get('/{username}', [PagesController::class, 'showViewPage'])->name('viewProfilePage');
    Route::get('/{username}/views', [PagesController::class, 'showViewProfilePage'])->name('viewViewProfilePage');
    Route::get('/{username}/membership', [PagesController::class, 'showMembershipProfilePage'])->name('viewMembershipProfilePage');
    Route::get('/{username}/post', [PagesController::class, 'showPostProfilePage'])->name('viewPostProfilePage');
    Route::get('/{username}/extra', [PagesController::class, 'showExtraProfilePage'])->name('viewExtraProfilePage');
    Route::get('/{username}/edit', [PagesController::class, 'showEditProfilePage'])->name('viewEditProfilePage');


    Route::get('/update-theme', function () {
        $theme = Request::input('theme', 'light');
        Cookie::queue('theme', $theme, 60 * 24 * 365);
        return response()->json(['status' => 'success']);
    });
});
