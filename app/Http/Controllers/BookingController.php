<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Http\Requests\addBookingRequest;
class BookingController extends Controller
{
    protected $repo;
    
    public function __construct()
    {
        $this->repo = new Repository();
    }

    public function index()
    {
        $booking = json_decode($this->repo->getBooking());
        $flights = json_decode($this->repo->getflights());
        
        return view('bookingmanagement.index',compact('booking','flights'));
    }

    public function addBooking(addBookingRequest $request)
    {
        $validated = $request->validated();
        $validated['bookingid']=rand ( 1000 , 9999 );
        //as i am using hardcode array , i will add incoming request to array and simply return that array
        return $this->repo->addBooking($validated);
    }

    public function checkinUpdate(request $request)
    {
        return $this->repo->updateCheckin($request);
    }

    public function seatStatus()
    {
        return view('seatstatus.index');
    }
    public function checkseatStatus(Request $request)
    {
       $request->validate([
           'flight_no' => 'required'
       ]);
        $seatStatus = $this->repo->seatStatusComplete($request->flight_no);
       return redirect()->back()->with('data',$seatStatus);
    }
}
