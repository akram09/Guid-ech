<?php

namespace App\Http\Controllers;

use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Auth;
 
 /**   
     * this allow to user send a reservation request 
    * @author Madani Yousfi Abdelwahed 
    *
    * @return \Illuminate\Http\Response
    */

class ReservationController extends Controller
{
    public function reserve(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'dateandtime' => 'required'
        ]);
        
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $lasty = $uriSegments[2];
        
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date_and_time = $request->dateandtime;
        $reservation->message = $request->message;
        $reservation->restaurant_id = $lasty;
        $reservation->user_id = Auth::user()->id;
        $reservation->status = false;
        $reservation->save();
        Toastr::success('Reservation request sent successfully. we will confirm to you shortly','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
