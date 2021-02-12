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
            <form  method="post" action="{{route('addFlight')}}" >
            @csrf
                <label>Assign Flight No</label><input type="text" name="flight_no">
                <label>Aeroplane Id</label><select name="aeroplane_id">
                @foreach($aeroplaneModel as $model)
                <option value="{{$model->aeroplane_id}}">{{$model->model}}</option>
                @endforeach
                </select>
                <label>Carrier Name</label><select name="carrier_name">
                @foreach($airlineCompanies as $company)
                <option value="{{$company->carrier_name}}">{{$company->carrier_name}}</option>
                @endforeach
                </select>
                
                <label>Departure</label><input type="text" name="departure">
                <label>Arrival</label><input type="text" name="Arrival">
                <label>Departure Time</label><input type="datetime-local" name="d_time">
                <label>Arrival Time</label><input type="datetime-local" name="a_time">
                <label>Terminal</label><input type="text" name="terminal">
                <input type="submit" value="submit">
            </form>
        
        </div>

        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Flight No</th>
      <th scope="col">Aeroplane Id</th>
      <th scope="col">Carrier Name</th>
      <th scope="col">Departure</th>
      <th scope="col">Arrival</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Terminal</th>
    </tr>
  </thead>
            <tbody>
            @foreach($flightList as $flight)
                <tr>
                <th scope="row">{{$flight->flight_no}}</th>
                <td>{{$flight->aeroplane_id}}</td>
                <td>{{$flight->carrier_name}}</td>
                <td>{{$flight->departure}}</td>
                <td>{{$flight->Arrival}}</td>
                <td>{{$flight->d_time}}</td>
                <td>{{$flight->a_time}}</td>
                <td>{{$flight->terminal}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

</body>
</html>