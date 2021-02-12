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
        <form action="{{route('passengerList')}}" method="post">
        @csrf
        <label>flight no</label>
            <input type="text" name="flight_no" value="AA103">
            <input type="submit" value="search">
        </form>
        @if (session('data'))
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
            @foreach(session('data') as $list)
                <tr>
                <th scope="row">{{$list['bookingid']}}</th>
                <th>{{$list['first_name']}}</th>
                <td>{{$list['last_name']}}</td>
                <td>{{$list['age']}}</td>
                <td>{{$list['gender']}}</td>
                <td>{{$list['flight_no']}}</td>
                <td>{{$list['check_in_status']}}</td>
                <td>{{$list['seat_no']}}</td>
                <td>{{$list['class']}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
@endif
        </div>
</div>
</body>
</html>