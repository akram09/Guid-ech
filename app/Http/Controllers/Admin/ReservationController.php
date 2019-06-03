<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ReservationConfirmed;
use App\Reservation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{ 
    /**
     * this function allow to Display all reservations requests
     *@return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }
    /**
     *  this function allow to confirm specified reservation request status 
     *@return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
        Notification::route('mail',$reservation->email )
            ->notify(new ReservationConfirmed());
        Toastr::success('Reservation successfully confirmed.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    /**
     *  this function allow to Delete specified request
     *@return \Illuminate\Http\Response
     *@author Abdelwahed Madani Yousfi
     */
    public function destory($id){
        Reservation::find($id)->delete();
        Toastr::success('Reservation successfully deleted.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
