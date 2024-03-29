<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ReservationController extends Controller
{
   

public function index($id){$reservations = Reservation::find($id);
    return view('home.reservation.bookdet', compact('reservations'));


    }



     
public function create(){ return view('home.reservation.book');}



  public function store(Request $request)
        {
                $reservation = Reservation::create([
                    "name" => $request->name,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "res_date" => $request->date,
                    "guest_number" => $request->people,
                    "restaurant" => $request->restaurant,
                    "message" => $request->message
                ]);

                // Redirect to the 'bookingdetail' route with the newly created reservation's id
                return redirect()->route('det', ['id' => $reservation->id])->with('flash_message', 'Added!');
            }
            public function destroy($id)
            {
                Reservation::destroy($id);
                return redirect()->route('bookdet.index');
            }
}