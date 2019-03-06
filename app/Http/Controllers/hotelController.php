<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotel;

class hotelController extends Controller
{
    public function index() {

    }
    public function create() {
        return  view('hotel.create')
        
    }
    public function store(Request $_REQUEST) {
        $hotel= new hotel;
        $hotel->name= $request->input('name');
        $hotel->présentation= $request->input('présentation');
        $hotel=save();
        
    }
    public function edit() {
        
    }
    public function update() {
        
    }
    public function destroy() {
        
    }
}
