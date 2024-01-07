<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style type="text/css">
        #t1{
            margin: 10px;
			border: 1px solid #000;
			padding: 10px 20px;
            background-color: #CEDC73;
			color: red;
        }
        #a1{
            color: #0007F0;
        }
    </style>
</head>
<body>
    <p><h1  id="a1">Welcome Admin</h1></p>
    @if(session('message'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('message')}}</li>
        </ul>
    </div>
    @endif
    <div class="form-group">
        @if(isset($allInfo))
        <div class="table-responsive">
            <table id="t1"class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <td colspan="14"><h2 class="mb-4 text-center"><u>User Details</u></h2></td>
                    </tr>
                    <tr>
                        <th>Sl No</th>
                        <th>Requirement For</th>
                        <th>Plan</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Project Name</th>
                        <th>Dates</th>
                        <th>Times</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Zipcode</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($allInfo as $all)
                    <tr>
                        <td>@php echo $i; @endphp</td>
                        <td>{{$all->requirement}}</td>
                        <td>{{$all->plan}}</td>
                        <td>{{$all->firstname}} {{$all->lastname}}</td>
                        <td><a href="mailto:{{$all->email}}">{{$all->email}}</a></td>
                        <td><a href="tel:{{$all->phone}}">{{$all->phone}}</a></td>
                        <td>{{$all->project}}</td>
                        <td>{{$all->sdate}} to {{$all->edate}}</td>
                        <td>{{$all->stime}} to {{$all->etime}}</td>
                        <td>{{$all->address1}}</td>
                        <td>{{$all->city}}</td>
                        <td>{{$all->zip}}</td>
                        <td><img src="{{$all->image}}" height="100" alt="User Image"></td>
                        <td>
                            <a href="{{url('/block')}}{{$all->user_id}}" class="btn btn-primary btn-sm">Block</a>
                            <a href="{{url('/unblock')}}{{$all->user_id}}" class="btn btn-success btn-sm">Unblock</a>
                            <a href="{{url('/delete')}}{{$all->user_id}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+ZjNdZ9u8g0L5BIhK+5r5swa5F+9z5E4qDOH6jBZhc5z5W5M" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-RfDf3gFhzz0Dp9v7N7P9sJVgBq/7Fks6v5z5buUqF+76E4e5z5F5O3D5P5G5r5R5" crossorigin="anonymous"></script>
</body>
</html>