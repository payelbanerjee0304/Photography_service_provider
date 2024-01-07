<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payel Creation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        body{background-image:url('img/hero/hero-2.jpg');
        background-size:500px;
        }
        table{background-image:url('img/tablepic.jpg');
        background-size:cover;
        }
        #d1,#d2,#d3,#d4,#d5,#d6,#d7,#d8,#d9,#d10,#d11,#d12,#d13,#d14, #d15{
			margin: 10px;
			border: 1px solid #000;
			padding: 10px 20px;
            background-color: #134738;
			color: #F3FDDE;
            opacity: 0.9;
			box-shadow: 12px 12px 12px #ccc;
            border-radius: 15px;
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;
		}
    </style>
</head>
<body>
    @if(isset($userInfo))
    @foreach($userInfo as $all)
    <div class="container">
    <form method='post' action='{{url("/update")}}' enctype="multipart/form-data">
        @csrf
        <header class='modal-header alert alert-success'>
            <h1 class="">Client details edit form</h1>
        </header>
        <div class="table responsiv">
        <table class='table table-hover table-border'>
            <tr>
                <input type="text" name="uid" value="{{$all->user_id}}" hidden>
                <td colspan="2">
                    <div class="form-group alert alert-primary">
                        <label  id='d1'>Requirement For</label>
                        <select class="form-control" name="requirement">
                        <option>Select</option>
                        <option name="requirement" value="Wedding photography" @if($all->requirement == "Wedding photography") selected @endif>Wedding photography</option>
                        <option name="requirement" value="Modelling photoshoot" @if($all->requirement == "Modelling photoshoot") selected @endif>Modelling photoshoot</option>
                        <option name="requirement" value="Exhibitions & Workshops" @if($all->requirement == "Exhibitions & Workshops") selected @endif>Exhibitions & Workshops</option>
                        <option name="requirement" value="Baby photography services" @if($all->requirement == "Baby photography services") selected @endif>Baby photography services</option>
                        <option name="requirement" value="Album designing services" @if($all->requirement == "Album designing services") selected @endif>Album designing services</option>
                        <option name="requirement" value="Product photography" @if($all->requirement == "Product photography") selected @endif>Product photography</option>
                        <option name="requirement" value="Photo editing services" @if($all->requirement == "Photo editing services") selected @endif>Photo editing services</option>
                        <option name="requirement" value="Model portfolio photography" @if($all->requirement == "Model portfolio photography") selected @endif>Model portfolio photography</option>
                        <option name="requirement" value="Passport photo services" @if($all->requirement == "Passport photo services") selected @endif>Passport photo services</option>
                        <option name="requirement" value="Fashion photography" @if($all->requirement == "Fashion photography") selected @endif>Fashion photography</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group alert alert-primary">
                        <label id='d15'>Plan</label>
                        <select class="form-control" name="plan">
                        <option>Select</option>
                        <option name="plan" value="Basic"@if($all->plan == "Basic") selected @endif>Basic</option>
                        <option name="plan" value="Standard"@if($all->plan == "Standard") selected @endif>Standard</option>
                        <option name="plan" value="Extended"@if($all->plan == "Extended") selected @endif>Extended</option>
                        <option name="plan" value="Ultimate"@if($all->plan == "Ultimate") selected @endif>Ultimate</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label  id='d2'>Name</label>
                        <input type="text" name="firstname" class="form-control alert alert-primary" value="{{$all->firstname}}" >
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label  id='d3'>Surname</label>
                        <input type="text" name="lastname" class="form-control alert alert-primary" value="{{$all->lastname}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label  id='d4'>Email</label>
                        <input type="email" name="email" class="form-control alert alert-primary" value="{{$all->email}}" disabled>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label  id='d5'>Phone No.</label>
                        <input type="number" name="phone" class="form-control alert alert-primary" value="{{$all->phone}}" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label  id='d6'>Shoot title or Project Name</label>
                        <input type="text" name="project" class="form-control alert alert-primary" value="{{$all->project}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d7'>Start Date</label>
                        <input type="date" name="sdate" class="form-control alert alert-primary" value="{{$all->sdate}}">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label  id='d8'>End Date</label>
                        <input type="date" name="edate" class="form-control alert alert-primary" value="{{$all->edate}}">
                    </div>
                </td>
            </tr>
            <tr>
            <td>
                    <div class="form-group">
                        <label  id='d9'>Start Time</label>
                        <input type="time" name="stime" class="form-control alert alert-primary" value="{{$all->stime}}">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label  id='d10'>End Time</label>
                        <input type="time" name="etime" class="form-control alert alert-primary" value="{{$all->etime}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label  id='d11'>Event location</label>
                        <input type="text" name="address1" class="form-control alert alert-primary" value="{{$all->address1}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label  id='d12'>City/Village</label>
                        <input type="text" name="city" class="form-control alert alert-primary" value="{{$all->city}}">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label  id='d13'>Zip code/Postal</label>
                        <input type="text" name="zip" class="form-control alert alert-primary" value="{{$all->zip}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <div class="form-group">
                        <label  id='d14'>Upload any govt id</label>
                        <img src="{{$all->image}}" height="100">
                        <input type="file" name="file"class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"  class="text-center">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Update" class="btn btn-success btn-lg">
                    </div>
                </td>
            </tr>
    </form>
</div>
@endforeach
@endif
</body>
</html>