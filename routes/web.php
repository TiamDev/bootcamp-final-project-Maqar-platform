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
        // Route::get('/tenant/dashboard', 'tenantDashboard')->name('tenant.dashboard');
        Route::get('/tenant', 'tenantDashboard')->name('tenant');
        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile/update', 'update')->name('profile.update');
        Route::get('/platform/dashboard', 'platformDashboard')->name('platform.dashboard');
        Route::get('/platform/users/view', function () {
            return view('platform.users.view');
        })->name('platform.users.view');

        //     Route::get('/tenant/{site}', 'providerSite')->name('tenant.site');
        //     Route::get('/getDirectorates', 'getDirectorates');
        // });
        // ***********************Provider***********************************

        Route::controller(ProviderController::class)->group(function () {
            Route::get('/platform/providers/index', 'index')->name('platform.provider');
            Route::get('/platform/providers/{name}/view', 'view')->name('platform.view');

            // Route::get('/platform/joinRequest/{name}/view', 'view')->name('platform.joinRequest.view');
            // Route::get('/platform/joinRequest/joinMessage', 'joinMessage')->name('platform.joinRequest.joinMessage');
            // Route::get('/platform/joinRequest/underReview', 'underReview')->name('platform.joinRequest.underReview');
            // Route::post('/platform/joinRequest/{name}/confirm', 'confirm')->name('platform.joinRequest.confirm');
            // Route::post('/platform/joinRequest/{name}/reject', 'reject')->name('platform.joinRequest.reject');
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

            // Route::get('/tenant/content/{name}', 'view')->name('content.view');
            // Route::get('/tenant/content/{name}/edit', 'edit')->name('content.edit');
            // Route::post('/tenant/content/update', 'update')->name('content.update');
            // Route::delete('/tenant/content/{name}/delete', 'delete')->name('content.delete');
        });




        //========================================================

        // Route::get('/platform', function () {
        //     return view('platform.dashboard');
        // })->name('platform.dashboard');
        // Route::get('/tenant', function () {
        //     return view('tenant.dashboard');
        // })->name('tenant.dashboard');
        // Route::get('/client', function () {
        //     return view('client.dashboard');
        // })->name('client.dashboard');

        //admin route*******************************************************************
        // Route::get('/platform', function () {
        //     return view('platform.dashboard');
        // })->name('platform.dashboard');

        // Route::get('/platform/profile', function () {
        //     return view('platform.profile');
        // })->name('platform.profile');

        // user cred

        // Route::get('/platform/users/add', function () {
        //     return view('platform.users.add');
        // })->name('platform.users.add');

        // Route::get('/platform/users/edit', function () {
        //     return view('platform.users.edit');
        // })->name('platform.users.edit');

        // Route::get('/platform/users/delete', function () {
        //     return view('platform.users.delete');
        // })->name('platform.users.delete');


        // // role cred

        // Route::get('/platform/roles/view', function () {
        //     return view('platform.roles.view');
        // })->name('platform.roles.view');
        // Route::get('/platform/roles/add', function () {
        //     return view('platform.roles.add');
        // })->name('platform.roles.add');

        // Route::get('/platform/roles/edit', function () {
        //     return view('platform.roles.edit');
        // })->name('platform.roles.edit');

        // Route::get('/platform/roles/delete', function () {
        //     return view('platform.roles.delete');
        // })->name('platform.roles.delete');


        //message cred

        // Route::get('/platform/messages', function () {
        //     return view('platform.messages.index');
        // })->name('platform.messages');

        // Route::get('/platform/messages/view', function () {
        //     return view('platform.messages.view');
        // })->name('platform.messages.view');
        // Route::get('/platform/messages/delete', function () {
        //     return view('platform.messages.delete');
        // })->name('platform.messages.delete');


        // // Route::get('/platform/offices/block', function () {
        // //     return view('platform.offices.block');
        // // })->name('platform.offices.block');

        // //tenant route**************************************************************
        // // Route::get('/tenant', function () {
        // //     return view('tenant.dashboard');
        // // })->name('tenant.dashboard');

        Route::get('/tenant/home', function () {
            return view('tenant.home');
        })->name('tenant.home');


        // Route::get('/tenant/users', function () {
        //     return view('tenant.users.index');
        // })->name('tenant.users');

        // Route::get('/tenant/roles', function () {
        //     return view('tenant.roles.index');
        // })->name('tenant.roles');


        // // user cred
        // Route::get('/tenant/users/view', function () {
        //     return view('tenant.users.view');
        // })->name('tenant.users.view');

        // Route::get('/tenant/users/add', function () {
        //     return view('tenant.users.add');
        // })->name('tenant.users.add');

        // Route::get('/tenant/users/edit', function () {
        //     return view('tenant.users.edit');
        // })->name('tenant.users.edit');

        // Route::get('/tenant/users/delete', function () {
        //     return view('tenant.users.delete');
        // })->name('tenant.users.delete');


        // // role cred

        // Route::get('/tenant/roles/view', function () {
        //     return view('tenant.roles.view');
        // })->name('tenant.roles.view');
        // Route::get('/tenant/roles/add', function () {
        //     return view('tenant.roles.add');
        // })->name('tenant.roles.add');

        // Route::get('/tenant/roles/edit', function () {
        //     return view('tenant.roles.edit');
        // })->name('tenant.roles.edit');

        // Route::get('/tenant/roles/delete', function () {
        //     return view('tenant.roles.delete');
        // })->name('tenant.roles.delete');





        // Route::get('/tenant/messages', function () {
        //     return view('tenant.messages.index');
        // })->name('tenant.messages');

        // Route::get('/tenant/messages/view', function () {
        //     return view('tenant.messages.view');
        // })->name('tenant.messages.view');
        // Route::get('/tenant/messages/delete', function () {
        //     return view('tenant.messages.delete');
        // })->name('tenant.messages.delete');

        // office cred
        // Route::get('/tenant/spaces', function () {
        //     return view('tenant.spaces.index');
        // })->name('tenant.spaces');

        // Route::get('/tenant/spaces/view', function () {
        //     return view('tenant.spaces.view');
        // })->name('tenant.spaces.view');

        // Route::get('/tenant/spaces/add', function () {
        //     return view('tenant.spaces.add');
        // })->name('tenant.spaces.add');

        // Route::get('/tenant/spaces/edit', function () {
        //     return view('tenant.spaces.edit');
        // })->name('tenant.spaces.edit');

        // Route::get('/tenant/spaces/delete', function () {
        //     return view('tenant.spaces.delete');
        // })->name('tenant.spaces.delete');



        //content cred
        // Route::get('/tenant/content', function () {
        //     return view('tenant.content.index');
        // })->name('tenant.content');

        // Route::get('/tenant/content/information', function () {
        //     return view('tenant.content.information');
        // })->name('tenant.content.information');

        // Route::get('/tenant/content/subInfo', function () {
        //     return view('tenant.content.subInfo');
        // })->name('tenant.content.stepTwo');

        // Route::get('/tenant/booking/view', function () {
        //     return view('tenant.booking.view');
        // })->name('tenant.booking.view');

        // Route::get('/tenant/messages/view', function () {
        //     return view('tenant.messages.view');
        // })->name('tenant.messages.view');
        // Route::get('/tenant/messages/delete', function () {
        //     return view('tenant.messages.delete');
        // })->name('tenant.messages.delete');

        //content cred
        // Route::get('/tenant/content', function () {
        //     return view('tenant.content.index');
        // })->name('tenant.content');



        //client route**************************************************************
        // Route::get('/client', function () {
        //     return view('client.dashboard');
        // })->name('client.dashboard');

        // Route::get('/client/booking', function () {
        //     return view('client.booking.index');
        // })->name('client.booking');
        // Route::get('/client/booking/checkout', function () {
        //     return view('client.booking.checkout');
        // })->name('client.checkout');

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

//**********************Message************************* */
// Route::controller(MessageController::class)->group(function () {
//     Route::post('/message', 'send')->name('message.send');
// });
// ***********************joinRequest***********************************
// Route::controller(JoinRequestController::class)->group(function () {
//     Route::get('/joinRequest/providerInfo', 'viewInformation')->name('providerInfo');
//     Route::post('/joinRequest/providerInfo', 'storeInformation');

//     Route::get('/joinRequest/providerDetails', 'viewDetails')->name('providerDetails');
//     Route::post('/joinRequest/providerDetails',  'storeDetails');
// });
