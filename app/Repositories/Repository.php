<?php namespace App\Repositories;
use App\Traits\dbArray;
use Illuminate\Support\Facades\Session;

class Repository implements RepositoryInterface
{
    use dbArray;
    /* public function __construct()
    {
        Session::push('flight', $this->flight); 
    } */
    public function fetchAllFlight(){
        
        return json_encode($this->flight);
    }
    public function fetchAeroplaneCompany(){
        
        return json_encode($this->AirlineCompanies);
    }

    public function fetchAeroplaneModel(){
        
        return json_encode($this->aeroplaneModel);
    }

    public function addFlight($data)
    {   
       array_push($this->flight,$data);
       return $this->flight;
    }

    public function getBooking()
    {
        return json_encode($this->booking);
    }

    public function addBooking($data)
    {   
       array_push($this->booking,$data);
       return $this->booking;
    }
    public function getflights()
    {
        return json_encode($this->flight);
    }
    
    public function updateCheckin($data)
    {
        foreach($this->booking as &$value){
            if($value['bookingid'] === $data['bookingid']){
                $value['check_in_status'] = $data['check_in_status'];
                $value['seat_no'] = $data['seat_no'];
                
                break; // Stop the loop after we've found the item
            }
        }
        return $this->booking;
    }

    public function seatStatus($data)
    {
      
        foreach ($this->flight as $plane)
            {
                if ($plane['flight_no'] == $data)
                    return $plane;
            }
    }

    public function seatStatusComplete($flight_no)
    {
        $seatStatus = $this->seatStatus($flight_no);
        $aeroplaneModel =json_decode($this->fetchAeroplaneModel());
        $AirlineCompanies =json_decode($this->fetchAeroplaneCompany());
        foreach($aeroplaneModel as $model){
            
            if($model->aeroplane_id == $seatStatus['aeroplane_id']){
                foreach($AirlineCompanies as $company){
                    if($company->carrier_name == $seatStatus['carrier_name']){
                        $seatStatus['Headquarter'] = $company->Headquarter;
                    }
                }
                $seatStatus['total_seats'] = $model->total_seats;
                $seatStatus['total_first_class_seats'] = $model->first_class;
                $seatStatus['total_business_seats'] = $model->business;
                $seatStatus['total_premium_economy_seats'] = $model->premium_economy;
                $seatStatus['total_economy_seats'] = $model->economy;

            }
        }
        return  $seatStatus;
    }

    public function getPassengerList($data)
    {   $list=[];
        foreach ($this->booking as $key => $value) {
            
            if($value['flight_no'] == $data){
                array_push($list, $value);
            }
        }
        return $list;
    }
}