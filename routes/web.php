<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Account\SigninController;
use App\Http\Controllers\Account\SignupController;
use App\Http\Controllers\Account\SignoutController;
use App\Http\Controllers\Account\UserController;
use App\Http\Controllers\Content\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\JoinRequest\JoinRequestController;
use App\Http\Controllers\Maqar\ProviderController;
use App\Http\Controllers\Message\MessageController;
use App\Http\Controllers\Maqar\WorkspaceTypeController;
use App\Http\Controllers\Reservation\ReservationController;
use App\Http\Controllers\Maqar\WorkspaceController;
use App\Models\maqar\workspace;

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

//**********************\*Home*/************************* */

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/aboutMagar', 'aboutMagar')->name('aboutMagar');
    Route::post('/offers', 'search')->name('offers');
    Route::get('/offers/{name}/details', 'viewDetails')->name('offer.viewDetails');
    Route::get('/tenant/{site}', 'providerSite')->name('tenant.site');
    Route::get('/getDirectorates', 'getDirectorates');
});

// **********************Reservation****************************

// Route::controller(ReservationController::class)->group(function () {
//     // Route::post('/site/{name}/reservationCheck', 'reservationCheck')->name('site.reservationCheck');

// });
Route::controller(ReservationController::class)->group(function () {
    Route::post('/offers/{name}/details/booking', 'reservationCheck')->name('offer.booking');
    Route::get('/tenant/{site}/Reservations/index', 'Reservations')->name('tenant.Reservations');
    Route::get('/tenant/{site}/Reservations/view/{id}', 'ReservationView')->name('tenant.Reservations.ReservationView');
    Route::post('/tenant/Reservations/reject/', 'ReservationReject')->name('tenant.Reservations.ReservationReject');
    Route::post('/tenant/{site}/Reservations/confirm/{id}', 'Reservationconfirm')->name('tenant.Reservations.Reservationconfirm');
    Route::get('/offers/{name}/details/booking/showDetials/{id}', 'showDetials')->name('offer.showDetials');
    Route::post('/offers/{name}/details/booking/checkout', 'checkout')->name('offer.checkout');
    Route::post('/offers/{name}/details/booking/cansel', 'cansel')->name('offer.cansel');
    Route::get('/client/myReservations', 'myReservations')->name('client.myReservations');
    Route::get('/client/search', 'search')->name('client.search');
});
// **********************Account****************************
Route::get('/signin', [SigninController::class, 'view'])->name('signin');
Route::post('/signin', [SigninController::class, 'authenticate'])->name('signin.submit');
//
Route::get('/signup', [SignupController::class, 'view'])->name('signup');
Route::post('/signup', [SignupController::class, 'store']);
//
Route::middleware('auth')->group(function () {
    Route::post('/signout', [SignoutController::class, 'signout'])->name('account.signout');

    // ***********************user*************************************
    Route::controller(UserController::class)->group(function () {
        Route::get('/client/dashboard', 'clientDashboard')->name('client.dashboard');
        Route::get('/tenant', 'tenantDashboard')->name('tenant');
        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile/update', 'update')->name('profile.update');
        Route::get('/platform/dashboard', 'platformDashboard')->name('platform.dashboard');
        Route::get('/platform/users/view', function () {
            return view('platform.users.view');
        })->name('platform.users.view');


        // ***********************Provider***********************************

        Route::controller(ProviderController::class)->group(function () {
            Route::get('/platform/providers/index', 'index')->name('platform.provider');
            Route::get('/platform/providers/{name}/view', 'view')->name('platform.view');
        });
        //***********************Maqar************************** */
        Route::controller(WorkspaceTypeController::class)->group(function () {
            Route::get('/platform/workspaceType', 'index')->name('WorkspaceType');
            Route::get('/platform/workspaceType/add', 'add')->name('WorkspaceType.add');
            Route::post('/platform/workspaceType/create', 'create')->name('workspaceType.create');
            Route::get('/platform/workspaceType/{name}', 'view')->name('WorkspaceType.view');
            Route::get('/platform/workspaceType/edit/{name}', 'edit')->name('WorkspaceType.edit');
            Route::post('/platform/workspaceType/edit', 'update')->name('WorkspaceType.update');
            Route::delete('/platform/workspaceType/delete/{id}', 'delete')->name('WorkspaceType.delete');
        });
        Route::controller(WorkspaceController::class)->group(function () {
            Route::get('/tenant/workspaces/index', 'index')->name('workspaces');
            Route::get('/tenant/workspaces/add', 'add')->name('workspaces.add');
            Route::post('/tenant/workspaces/create', 'create')->name('workspaces.create');
            Route::get('/tenant/workspaces/{name}', 'view')->name('workspaces.view');
            Route::get('/tenant/workspaces/{name}/edit', 'edit')->name('workspaces.edit');
            Route::post('/tenant/workspaces/update', 'update')->name('workspaces.update');
            Route::delete('/tenant/workspaces/{name}/delete', 'delete')->name('workspaces.delete');
        });

        //***********************Tenant Content************************** */
        Route::controller(ContentController::class)->group(function () {
            Route::get('/tenant/content/index', 'index')->name('content');
            Route::get('/tenant/content/addFeature', 'addFeature')->name('content.addFeature');
            Route::post('/tenant/content/createFeature', 'createFeature')->name('content.createFeature');
            Route::get('/tenant/content/addService', 'addService')->name('content.addService');
            Route::post('/tenant/content/createService', 'createService')->name('content.createService');
            Route::get('/tenant/content/addBankAccount', 'addBankAccount')->name('content.addBankAccount');
            Route::post('/tenant/content/createBankAccount', 'createBankAccount')->name('content.createBankAccount');
            Route::post('/tenant/content/contactus', 'contactus')->name('content.contactus');
            Route::post('/tenant/content/aboutus', 'aboutus')->name('content.aboutus');
            Route::post('/tenant/content/logo', 'logo')->name('content.logo');
            Route::post('/tenant/content/Galary', 'Galary')->name('content.Galary');
            Route::post('/tenant/content/social', 'social')->name('content.social');
            Route::post('/tenant/content/publish', 'publish')->name('content.publish');
            Route::post('/tenant/content/workTime', 'workTime')->name('content.workTime');
        });






        Route::get('/tenant/home', function () {
            return view('tenant.home');
        })->name('tenant.home');
        Route::controller(JoinRequestController::class)->group(function () {
            Route::get('/joinRequest/providerInfo', 'viewInformation')->name('providerInfo');
            Route::post('/joinRequest/providerInfo', 'storeInformation');

            Route::get('/joinRequest/providerDetails', 'viewDetails')->name('providerDetails');
            Route::post('/joinRequest/providerDetails',  'storeDetails');
        });
        //bills
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('/client/invoice', 'index')->name('client.invoice');
            Route::get('/client/invoice/view/{id}', 'view')->name('client.invoice.view');
        });
    });
});


// ***********************joinRequest***********************************
Route::controller(JoinRequestController::class)->group(function () {
    Route::get('/platform/joinRequest/index', 'index')->name('platform.joinRequest');
    Route::get('/platform/joinRequest/{name}/view', 'view')->name('platform.joinRequest.view');
    Route::get('/platform/joinRequest/joinMessage', 'joinMessage')->name('platform.joinRequest.joinMessage');
    Route::get('/platform/joinRequest/underReview', 'underReview')->name('platform.joinRequest.underReview');
    Route::post('/platform/joinRequest/{name}/confirm', 'confirm')->name('platform.joinRequest.confirm');
    Route::post('/platform/joinRequest/{name}/reject', 'reject')->name('platform.joinRequest.reject');
});
//message cred
Route::post('/messages/send', [MessageController::class, 'store'])->name('messages.store');
Route::post('/messages/sendreplay', [MessageController::class, 'storeTenant'])->name('messages.storeTenant');

Route::controller(MessageController::class)->group(function () {
    Route::get('/platform/messages', 'index')->name('platform.messages');
    Route::get('/platform/messages/index', 'index')->name('platform.index');

    Route::get('/platform/messages/view/{id}', 'view')->name('messages.view');
    Route::delete('/platform/messages/delete/{id}', 'destroy')->name('messages.destroy');
    Route::post('/tenant/messages/replay', 'sendreplay')->name('messages.sendreplay');
});
