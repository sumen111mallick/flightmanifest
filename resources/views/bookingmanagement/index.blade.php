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
<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-6">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Add Booking</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="{{route('addBooking')}}" role="form" autocomplete="off">
                            @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="first_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">age</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="number" name="age" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="col-lg-9">
                                        <select name="gender">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Flight No</label>
                                    <div class="col-lg-9">
                                        <select name="flight_no">
                                        @foreach($flights as $flight)
                                            <option value="{{$flight->flight_no}}">{{$flight->flight_no}}, {{$flight->departure}}->{{$flight->Arrival}}({{$flight->d_time}}-{{$flight->a_time}}), Terminal-{{$flight->terminal}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Check In</label>
                                    <div class="col-lg-9">
                                        <select name="check_in_status">
                                            <option value="Y">Yes</option>
                                            <option value="Y">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Seat No</label>
                                    <div class="col-lg-9">
                                        <input type="number" name="seat_no">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Class</label>
                                    <div class="col-lg-9">
                                        <select name="class">
                                            <option value="First Class">First Class</option>
                                            <option value="Business">Business</option>
                                            <option value="Premium Economy">Premium Economy</option>
                                            <option value="Economy">Economy</option>
                                        </select>   
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        
                                        <input type="submit" class="btn btn-primary" value="Add Booking">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->
        </div>
        <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Check In</h3>
                    <form action="{{route('checkin')}}" method="post">
                    @csrf
                    <fieldset>
                        <div class="form-group has-error">
                        <label class="col-lg-3 col-form-label form-control-label">Booking ID</label>
                            <input class="form-control input-lg" name="bookingid" type="text" value="1001">
                        </div>
                        <div class="form-group has-success">
                        <label class="col-lg-3 col-form-label form-control-label">check In</label>
                        <select name="check_in_status">
                                            <option value="Y" selected>Yes</option>
                                        
                                        </select>
                        </div>
                        <div class="form-group has-success">
                        <label class="col-lg-3 col-form-label form-control-label">Seat NO</label>
                            <input class="form-control input-lg" name="seat_no"  type="text"  value="10" >
                        </div>
                        
                        <input class="btn btn-lg btn-primary btn-block" value="checkin" type="submit">
                    </fieldset>
                    </form>
                </div>
        </div>
        
    </div>
</div>

        <div class="row">
        <table class="table">
  <thead>
    <tr>
        <th scope="col">bookingid</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">age</th>
      <th scope="col">gender</th>
      <th scope="col">flight_no</th>
      <th scope="col">check_in_status</th>
      <th scope="col">seat_no</th>
      <th scope="col">class</th>
    </tr>
  </thead>
            <tbody>
            @foreach($booking as $list)
                <tr>
                <th scope="row">{{$list->bookingid}}</th>
                <th>{{$list->first_name}}</th>
                <td>{{$list->last_name}}</td>
                <td>{{$list->age}}</td>
                <td>{{$list->gender}}</td>
                <td>{{$list->flight_no}}</td>
                <td>{{$list->check_in_status}}</td>
                <td>{{$list->seat_no}}</td>
                <td>{{$list->class}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

</body>
</html>