@include('includes.navbar')
    <div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="row">
        <form action="{{route('checkseatStatus')}}" method="post">
        @csrf
            <label>flight No.</label>
            <input type="text" name="flight_no" value="CC102">
            <input type="submit" value="search">
        </form>
        </div>

        @if (session('data'))
        <table class="table">
            <thead>
                <tr>
                <th>Flight No</th>
                <th>{{ session('data')['flight_no']}}</th>
                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Aeroplane Id</th>
                    <td>{{session('data')['aeroplane_id']}}</td>
                </tr>
                <tr>
                    <th scope="row">Carrier Name</th>
                    <td>{{session('data')['carrier_name']}}</td>
                </tr>
                <tr>
                    <th scope="row">HeadQuarter</th>
                    <td>{{session('data')['Headquarter']}}</td>
                </tr>
                <tr>
                    <th scope="row">Departure</th>
                    <td>{{session('data')['departure']}}</td>
                </tr>
                <tr>
                    <th scope="row">Arrival</th>
                    <td>{{session('data')['Arrival']}}</td>
                </tr>
                <tr>
                    <th scope="row">Departure Time</th>
                    <td>{{session('data')['d_time']}}</td>
                </tr>
                <tr>
                    <th scope="row">Arrival Time</th>
                    <td>{{session('data')['a_time']}}</td>
                </tr>
                <tr>
                    <th scope="row">Terminal</th>
                    <td>{{session('data')['terminal']}}</td>
                </tr>
                <tr>
                    <th scope="row">Total Seats</th>
                    <td>Total:{{session('data')['total_seats']}}, Occupied: {{session('data')['filled_first_class'] + session('data')['filled_business_class'] + session('data')['premium_economy'] + session('data')['economy']}}</td>
                </tr>
                <tr>
                    <th scope="row">First Class</th>
                    <td>Total:{{session('data')['total_first_class_seats']}}, Occupied: {{session('data')['filled_first_class']}}, Available: {{session('data')['total_first_class_seats']-session('data')['filled_first_class']}}</td>
                </tr>
                <tr>
                    <th scope="row">Business Class</th>
                    <td>Total:{{session('data')['total_business_seats']}}, Occupied: {{session('data')['filled_business_class']}}, Available: {{session('data')['total_business_seats']-session('data')['filled_business_class']}}</td>
                </tr>
                <tr>
                    <th scope="row">Premium Economy Class</th>
                    <td>Total:{{session('data')['total_premium_economy_seats']}}, Occupied: {{session('data')['premium_economy']}}, Available: {{session('data')['total_premium_economy_seats']-session('data')['premium_economy']}}</td>
                </tr>
                <tr>
                    <th scope="row">Economy Class</th>
                    <td>Total:{{session('data')['total_economy_seats']}}, Occupied: {{session('data')['economy']}}, Available:{{session('data')['total_economy_seats']-session('data')['economy']}} </td>
                </tr>

            </tbody>
            </table>
    
@endif
</div>
</body>
</html>