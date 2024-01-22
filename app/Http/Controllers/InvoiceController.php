<?php

namespace App\Http\Controllers;

use App\Models\Account\User;
use App\Models\reservation\Reservation;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        $reservations = Reservation::where('user_id', $user->id)->latest() // يجيب الحجوزات الأحدث أولاً
            ->paginate(10);
        return view('client.invoice.index', compact('reservations'));
    }
    public function view($id)
    {
        $reservation = Reservation::find($id);

        return view('client.invoice.view', compact('reservation'));
    }
}
