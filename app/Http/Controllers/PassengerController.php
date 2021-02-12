<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
class PassengerController extends Controller
{
    protected $repo;
    
    public function __construct()
    {
        $this->repo = new Repository();
    }

    public function index()
    {
        return view('passenger.index');
       
    }
    public function passengerList(Request $request)
    {
        $request->validate([
            'flight_no'=>'required'
        ]);
        $passengerList =  $this->repo->getPassengerList($request->flight_no);
        
        return redirect()->back()->with('data',$passengerList);
    }
}
