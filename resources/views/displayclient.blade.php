<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style type="text/css">
        #t1{
            margin: 10px;
			border: 1px solid #000;
			padding: 10px 20px;
            background-color: #02E3CB;
			color: red;
        }
        #a1{
            color: #0007F0;
        }
    </style>
</head>
<body>
<p><h1  id="a1">Welcome @php echo session('name'); @endphp</h1></p>
    @if(session('message'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('message')}}</li>
        </ul>
    </div>
    @endif
    <div class="form-group">
        @if(isset($userinfo))
        <div class="table-responsive">
            <table id="t1"class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
        <th>Sl No</th>
        <th>Requirement For</th>
        <th>Plan</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Project Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>address1</th>
        <th>City</th>
        <th>Zipcode</th>
		<th>Image</th>
        <th>Action</th>
        </tr>
                @php
                $i=1;
                @endphp
                @foreach($userinfo as $all)
                <tr>
            <td>@php echo $i;@endphp</td>
            <td>{{$all->requirement}}</td>
            <td>{{$all->plan}}</td>
            <td>{{$all->firstname}}</td>
            <td>{{$all->lastname}}</td>
            <td><a href="{{$all->email}}"></a>{{$all->email}}</td>
            <td><a href="{{$all->phone}}"></a>{{$all->phone}}</td>
            <td>{{$all->project}}</td>
            <td>{{$all->sdate}}</td>
            <td>{{$all->edate}}</td>
            <td>{{$all->stime}}</td>
            <td>{{$all->etime}}</td>
            <td>{{$all->address1}}</td>
            <td>{{$all->city}}</td>
            <td>{{$all->zip}}</td>
			<td><img src="{{$all->image}}" height="100"></td>
            <td>
                <a href="{{url('/edit')}}{{$all->user_id}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{url('/logout')}}" class="btn btn-danger btn-sm">Logout</a>
            </td>
        </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
            </table>
        </div>
        @endif
</body>
</html>