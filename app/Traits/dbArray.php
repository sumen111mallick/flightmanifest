<?php
namespace App\Traits;

trait dbArray {
    public $aeroplaneModel = [
        ['brand'=>'Boeing', 'model'=>'737-800', 'aeroplane_id'=>'boeing001', 'total_seats'=>650,'first_class'=>50,'business'=>100, 'premium_economy'=>100, 'economy'=>400],
        ['brand'=>'Airbus', 'model'=>'A380', 'aeroplane_id'=>'airbus001', 'total_seats'=>650,'first_class'=>50,'business'=>100, 'premium_economy'=>100, 'economy'=>400],
        ['brand'=>'Dash', 'model'=>'8', 'aeroplane_id'=>'dash001', 'total_seats'=>650,'first_class'=>50,'business'=>100, 'premium_economy'=>100, 'economy'=>400]
        ];
    public $AirlineCompanies = [
        ['carrier_name'=>'Qantas', 'Headquarter'=>'Australia'],
        ['carrier_name'=>'Singapore Airlines', 'Headquarter'=>'Singapore'],
        ['carrier_name'=>'Emirates', 'Headquarter'=>'UAE']
        ];

    public $flight = [
        ['flight_no' => 'AA101', 'aeroplane_id' => 'boeing001', 'carrier_name'=>'Qantas', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'9:30', 'a_time'=>'1:00', 'terminal'=>'T1', 'filled_first_class'=>0, 'filled_business_class'=>13,'premium_economy'=>0,'economy'=>162],
        ['flight_no' => 'AA102', 'aeroplane_id' => 'airbus001', 'carrier_name'=>'Qantas', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'10:30', 'a_time'=>'2:00','terminal'=>'T2', 'filled_first_class'=>14, 'filled_business_class'=>34,'premium_economy'=>65,'economy'=>371],
        ['flight_no' => 'AA103', 'aeroplane_id' => 'dash001', 'carrier_name'=>'Qantas', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'11:30', 'a_time'=>'3:00','terminal'=>'T3', 'filled_first_class'=>0, 'filled_business_class'=>0,'premium_economy'=>0,'economy'=>38],
        ['flight_no' => 'BB101', 'aeroplane_id' => 'boeing001', 'carrier_name'=>'Singapore Airlines', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'9:30', 'a_time'=>'1:00', 'terminal'=>'T1', 'filled_first_class'=>0, 'filled_business_class'=>8,'premium_economy'=>14,'economy'=>160],
        ['flight_no' => 'BB102', 'aeroplane_id' => 'dash001', 'carrier_name'=>'Singapore Airlines', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'11:30', 'a_time'=>'3:00', 'terminal'=>'T3', 'filled_first_class'=>12, 'filled_business_class'=>80,'premium_economy'=>40,'economy'=>360],
        ['flight_no' => 'BB103', 'aeroplane_id' => 'airbus001', 'carrier_name'=>'Singapore Airlines', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'10:30', 'a_time'=>'2:00', 'terminal'=>'T2', 'filled_first_class'=>0, 'filled_business_class'=>0,'premium_economy'=>4,'economy'=>30],
        ['flight_no' => 'CC101', 'aeroplane_id' => 'boeing001', 'carrier_name'=>'Emirates', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'9:30', 'a_time'=>'1:00', 'terminal'=>'T1', 'filled_first_class'=>4, 'filled_business_class'=>8,'premium_economy'=>6,'economy'=>150],
        ['flight_no' => 'CC102', 'aeroplane_id' => 'airbus001', 'carrier_name'=>'Emirates', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'10:30', 'a_time'=>'2:00', 'terminal'=>'T2', 'filled_first_class'=>16, 'filled_business_class'=>64,'premium_economy'=>50,'economy'=>300],
        ['flight_no' => 'CC103', 'aeroplane_id' => 'dash001', 'carrier_name'=>'Emirates', 'departure'=>'Delhi', 'Arrival'=>'Kolkata', 'd_time'=>'11:30', 'a_time'=>'3:00', 'terminal'=>'T3', 'filled_first_class'=>0, 'filled_business_class'=>0,'premium_economy'=>4,'economy'=>40]
    ];

    public $booking = [
        ['first_name'=>'sumen', 'last_name'=>'Mallick','age'=>26, 'gender'=>'M','flight_no'=>'AA101','check_in_status'=>'Y', 'seat_no'=>'10', 'class'=>'First Class','bookingid'=>'1000'],
        ['first_name'=>'Rahul', 'last_name'=>'kumar','age'=>23, 'gender'=>'M','flight_no'=>'AA103','check_in_status'=>'N', 'seat_no'=>'', 'class'=>'First Class','bookingid'=>'1001'],
        ['first_name'=>'ashu', 'last_name'=>'kumari','age'=>24, 'gender'=>'F','flight_no'=>'AA103','check_in_status'=>'N', 'seat_no'=>'', 'class'=>'First Class','bookingid'=>'1002']
    ];
}