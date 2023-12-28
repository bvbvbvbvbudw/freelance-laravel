<?php

use App\Http\Controllers\BrandPagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ThreadController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
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


Route::prefix('popups')->group(function(){
    Route::get('/edit_popup_profile', function (){
        // auth user id
        $current_user = Auth::user();
        return view('dashboard.components.popups.edit_popup', ['user' => $current_user, "user_info" => $current_user->info ]);
    })->name('editPopup');

    Route::get('/create_popup_profile', function (){
        // auth user id
        return view('dashboard.components.popups.create_popup_profile');
    })->name('createPopup');

    Route::post('/payment_popup', function () {
        $donate = isset($_POST['donate']) ? $_POST['donate'] : 0;
        $current_user = Auth::user();
        if(isset($_POST['id'])) {
            $request_user = User::where('id', (int)$_POST['id'])->first();
        } else {
            $request_user = false;
        }

        return view('dashboard.components.popups.payment_popup', ['user' => $current_user, 'req_user' => $request_user, 'donate' => $donate]);
    })->name('paymentPopup');

    Route::get('/share_popup_profile', function (){
        // auth user id
        return view('dashboard.components.popups.share_popup_profile');
    })->name('sharePopup');
    Route::get('/singin-popup', function(){
        return view('auth.sigin_popup');
    });
    Route::get('/singin-popups', function(){
        return view('auth.create_account_popup');
    });
    Route::get('/brand_popup', function(){
        return view('dashboard.components.popups.brand_popup');
    });
});

Route::middleware(['auth'])->group(function (){

    Route::middleware(['role:1'])->group(function () {
        Route::prefix('app')->group(function () {
            Route::get('/dashboard', [PagesController::class, 'showHomePage'])->name('mainPage');
            Route::get('/donations', [PagesController::class, 'showDonationPage'])->name('viewDonate');
            Route::get('/membership', [PagesController::class, 'showMembershipPage'])->name('viewMembershipPage');
            Route::get('/membership/enable', [PagesController::class, 'showEnableMembershipPage'])->name('viewEnableMembership');
            Route::get('/extras', [PagesController::class, 'showExtrasPage'])->name('viewExtrasPage');
            Route::get('/commissions', [PagesController::class, 'showCommissionsPage'])->name('viewCommissionsPage');
            Route::get('/messages', [PagesController::class, 'showMessagesPage'])->name('viewMessagePage');
            Route::resource('/jobs', JobsController::class)->names('viewJobsPage');
            Route::get('/jobs/{id}', [JobsController::class, 'show'])->name('show');
            Route::get('/integrations', [PagesController::class, 'showIntegrationsPage'])->name('viewIntegrationsPage');
            Route::get('/payouts', [PagesController::class, 'showPayoutsPage'])->name('viewPayoutsPage');
            Route::get('/settings', [PagesController::class, 'showSettingsPage'])->name('viewSettingsPage');
            Route::get('/view', [PagesController::class, 'showViewPublishPage'])->name('viewPublishPage');
            Route::get('/buttons', [PagesController::class, 'showButtonsPage'])->name('viewButtonsPage');
            Route::get('/post', [PagesController::class, 'showPostsPage'])->name('viewPostsPage');
            Route::get('/post/new', [PagesController::class, 'showPostsCreatePage'])->name('viewPostsCreatePage');
            Route::get('/post/audio/new', [PagesController::class, 'showPostsAudioCreatePage'])->name('viewPostsAudioCreatePage');
            Route::get('/post/album/new', [PagesController::class, 'showPostsAlbumCreatePage'])->name('viewPostsAlbumCreatePage');

        });

    });

    Route::middleware(['role:2'])->group(function () {
        Route::prefix('brand')->group(function() {
            Route::get('/dashboard', [BrandPagesController::class, 'dashboardPage'])->name('brandDashboard');
            Route::get('/campaigns', [BrandPagesController::class ,'campaignsPage'])->name('brandCampaigns');
            Route::get('/contract-statistics', [BrandPagesController::class, 'campaignsContractPage'])->name('brandContractStatistic');
            Route::get('/job/new', [BrandPagesController::class, 'newJobPage'])->name('brandJob');
            Route::get('/jobs', [BrandPagesController::class, 'myJobsPage'])->name('brandMyJob');
            Route::get('/my-jobs', [BrandPagesController::class, 'jobDetailsPage'])->name('brandJobDetails');
            Route::get('/explore', [BrandPagesController::class, 'explorePage'])->name('brandExplore');
            Route::get('/messages', [BrandPagesController::class, 'messagesPage'])->name('brandMessage');
            Route::get('/commissions', [BrandPagesController::class, 'commissionsPage'])->name('brandCommissions');
            Route::get('/b&g', [BrandPagesController::class, 'buttonsPage'])->name('brandButtons');
            Route::get('/integrations', [BrandPagesController::class, 'integrationsPage'])->name('brandIntegrations');
            Route::get('/payouts', [BrandPagesController::class, 'payoutsPage'])->name('brandPayouts');
            Route::get('/settings', [BrandPagesController::class, 'settingsPage'])->name('brandSettings');
        });

    });

    Route::post('/post/store', [PagesController::class, 'storePost'])->name('post_create');
    Route::post('/edit-profile/store', [ProfileController::class, 'editProfile'])->name('editProfile');

    Route::get('/{username}', [PagesController::class, 'showViewPage'])->name('viewProfilePage');;
    Route::get('/{username}/views', [PagesController::class, 'showViewProfilePage'])->name('viewViewProfilePage');
    Route::get('/{username}/membership', [PagesController::class, 'showMembershipProfilePage'])->name('viewMembershipProfilePage');
    Route::get('/{username}/post', [PagesController::class, 'showPostProfilePage'])->name('viewPostProfilePage');
    Route::get('/{username}/extra', [PagesController::class, 'showExtraProfilePage'])->name('viewExtraProfilePage');
    Route::get('/{username}/edit', [PagesController::class, 'showEditProfilePage'])->name('viewEditProfilePage');

    Route::post('/favorite', [FavoriteController::class, 'addFavorite'])->name('addFavorite');
    Route::post('/threads', [ThreadController::class, 'createThread'])->name('createThread');
    Route::get('/threads/{id}', [ThreadController::class, 'showThreads']);
    Route::post('/threads/{id}/newmessage', [ThreadController::class, 'createMessage'])->name('createMessage');



//pages


//    Route::get('/donations', [PagesController::class, 'showDonationPage'])->name('viewDonate');
//    Route::get('/membership', [PagesController::class, 'showMembershipPage'])->name('viewMembershipPage');
//    Route::get('/membership/enable', [PagesController::class, 'showEnableMembershipPage'])->name('viewEnableMembership');
//    Route::get('/extras', [PagesController::class, 'showExtrasPage'])->name('viewExtrasPage');
//    Route::get('/commissions', [PagesController::class, 'showCommissionsPage'])->name('viewCommissionsPage');
//
//
//    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
//    Route::get('/jobs/{id}', [JobsController::class, 'show'])->name('show');
//Route::post('/create-message/{thread}', [ThreadController::class, 'createMessage'])->name('createMessage');
//
//
//    Route::get('/view/publish', [PagesController::class, 'showViewPublishPage'])->name('viewPublishPage');
//    Route::get('/post', [PagesController::class, 'showPostsPage'])->name('viewPostsPage');
//
//    Route::get('/post/create', [PagesController::class, 'showPostsCreatePage'])->name('viewPostsCreatePage');
//    Route::get('/post/audio', [PagesController::class, 'showPostsAudioCreatePage'])->name('viewPostsAudioCreatePage');
//    Route::get('/post/album', [PagesController::class, 'showPostsAlbumCreatePage'])->name('viewPostsAlbumCreatePage');
//
//    Route::get('/messages', [PagesController::class, 'showMessagesPage'])->name('viewMessagePage');
//
//
//    Route::get('/buttons', [PagesController::class, 'showButtonsPage'])->name('viewButtonsPage');
//    Route::get('/integrations', [PagesController::class, 'showIntegrationsPage'])->name('viewIntegrationsPage');
//    Route::get('/payouts', [PagesController::class, 'showPayoutsPage'])->name('viewPayoutsPage');
//    Route::get('/settings', [PagesController::class, 'showSettingsPage'])->name('viewSettingsPage');

    //profile
//    Route::get('/{username}', [PagesController::class, 'showViewPage'])->name('viewProfilePage');
//    Route::get('/{username}/views', [PagesController::class, 'showViewProfilePage'])->name('viewViewProfilePage');
//    Route::get('/{username}/membership', [PagesController::class, 'showMembershipProfilePage'])->name('viewMembershipProfilePage');
//    Route::get('/{username}/post', [PagesController::class, 'showPostProfilePage'])->name('viewPostProfilePage');
//    Route::get('/{username}/extra', [PagesController::class, 'showExtraProfilePage'])->name('viewExtraProfilePage');
//    Route::get('/{username}/edit', [PagesController::class, 'showEditProfilePage'])->name('viewEditProfilePage');

    Route::get('/update-theme', function () {
        $theme = Request::input('theme', 'light');
        Cookie::queue('theme', $theme, 60 * 24 * 365);
        return response()->json(['status' => 'success']);
    });
});
