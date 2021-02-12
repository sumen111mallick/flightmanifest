<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class addFlightTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function addFlightTest()
    {   
        $data = [
            'flight_no' => 'AA201',
            'aeroplane_id' => 'boeing001',
            'carrier_name' => 'Qantas',
            'departure' => 'Delhi',
            'Arrival' => 'Kolkata',
            'd_time' => '9:30',
            'a_time' => '1:00',
            'terminal' => 'T1',
                   ];
            $response = $this->json('POST', 'manage-flight',$data);
            $response->assertStatus(200);
            $response->assertJsonStructure([
                [
                    'flight_no','aeroplane_id','carrier_name','departure','Arrival','d_time','a_time','terminal','filled_first_class','filled_business_class','premium_economy','economy'
                ]
            ]);
            
    }
    /** @test */
    public function addFlightTestFailed()
    {   
        $data = [
            'flight_no' => '',
            'aeroplane_id' => 'boeing001',
            'carrier_name' => 'Qantas',
            'departure' => 'Delhi',
            'Arrival' => 'Kolkata',
            'd_time' => '9:30',
            'a_time' => '1:00',
            'terminal' => 'T1',
                   ];
            $response = $this->json('POST', 'manage-flight',$data);
            $response->assertStatus(422);
            
            
    }
    /** @test */
    public function addBookingTest()
    {   
        $data = [
            'first_name' => 'sumen',
            'last_name' => 'Mallick',
            'age' => '34',
            'gender' => 'M',
            'flight_no' => 'AA101',
            'check_in_status' => 'Y',
            'seat_no' => '3',
            'class' => 'First Class',
            'bookingid' =>'1003'
                   ];
            $response = $this->json('POST', 'manage-booking',$data);
            $response->assertStatus(200);
            $response->assertJsonStructure([
                [
                    'first_name','last_name','age','gender','flight_no','check_in_status','seat_no','class','bookingid'
                ]
            ]);
            
    }
    /** @test */
    public function addBookingTestFailed()
    {   
        $data = [
            'first_name' => '',
            'last_name' => 'Mallick',
            'age' => '34',
            'gender' => 'M',
            'flight_no' => 'AA101',
            'check_in_status' => 'Y',
            'seat_no' => '3',
            'class' => 'First Class',
            'bookingid' =>'1003'
                   ];
            $response = $this->json('POST', 'manage-booking',$data);
            $response->assertStatus(422);
                       
    }
    /** @test */
    public function flightSeatTest()
    {   
        $data = [
            'flight_no' => 'CC102',
            
                   ];
            $response = $this->call('POST', 'seat-status',$data);
            $response->assertStatus(302);
            $response->assertSessionHasNoErrors();
            
                       
    }
     /** @test */
     public function flightSeatTestFailed()
     {   
         $data = [
             'flight_no' => '',
             
                    ];
             $response = $this->call('POST', 'seat-status',$data);
             $response->assertStatus(302);
             $response->assertSessionHasErrors();
             
                        
     }
     /** @test */
    public function passengerListTest()
    {   
        $data = [
            'flight_no' => 'CC102',
            
                   ];
            $response = $this->call('POST', 'passenger-list',$data);
            $response->assertStatus(302);
            $response->assertSessionHasNoErrors();
            
                       
    }
     /** @test */
     public function passengerListTestFailed()
     {   
         $data = [
             'flight_no' => '',
             
                    ];
             $response = $this->call('POST', 'passenger-list',$data);
             $response->assertStatus(302);
             $response->assertSessionHasErrors();
             
                        
     }
}
