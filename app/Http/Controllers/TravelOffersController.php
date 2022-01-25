<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class TravelOffersController extends Controller
{
    public function index() {
      $offers = Offer::all();
      return view('offers', compact('offers'));
    }
}
