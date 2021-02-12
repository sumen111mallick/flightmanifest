<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\addFlightRequest;
class FlightmanageController extends Controller
{
    protected $repo;
    
    public function __construct()
    {
        $this->repo = new Repository();
    }
    public function index(){
        /* $S = Session::get('flight');
        dd($S); */
        $flightList = json_decode($this->repo->fetchAllFlight());
        $aeroplaneModel = json_decode($this->repo->fetchAeroplaneModel());
        $airlineCompanies = json_decode($this->repo->fetchAeroplaneCompany());
        return view('flightmanagement.index', compact('flightList','aeroplaneModel','airlineCompanies'));
    }

    public function addFlight(AddFlightRequest $request)
    {
        $validated = $request->validated();
        return $this->repo->addFlight($validated);
    }
}
