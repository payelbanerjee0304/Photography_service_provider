<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoPhile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        body{background-image:url('img/hero/hero-2.jpg');
        background-size:500px;
        }
        table{background-image:url('img/tablepic.jpg');
        background-size:cover;
        }
        #d1,#d2,#d3,#d4,#d5,#d6,#d7,#d8,#d9,#d10,#d11,#d12,#d13,#d14,#d15{
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
@if(session('message'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('message')}}</li>
        </ul>
    </div>
    @endif
    <div class="container">
    <form method='post' action='{{url("/submit")}}' enctype="multipart/form-data" class="form">
        @csrf
        <header class='modal-header alert alert-success'>
        <marquee scrollamount='10' onmouseover='this.stop();' onmouseout='this.start();'>
		    <h1><strong>Client details and booking form</strong></h1>
        </marquee>
        </header>
        <div class="table responsiv">
        <table class='table table-hover table-border'>
            <tr>
                <td colspan="2">
                    <div class="form-group alert alert-primary">
                        <label id='d1'>Requirement For</label>
                        <select class="form-control" name="requirement">
                        <option>Select</option>
                        <option name="requirement" value="Wedding photography">Wedding photography</option>
                        <option name="requirement" value="Modelling photoshoot">Modelling photoshoot</option>
                        <option name="requirement" value="Exhibitions & Workshops">Exhibitions & Workshops</option>
                        <option name="requirement" value="Baby photography services">Baby photography services</option>
                        <option name="requirement" value="Album designing services">Album designing services</option>
                        <option name="requirement" value="Product photography">Product photography</option>
                        <option name="requirement" value="Photo editing services">Photo editing services</option>
                        <option name="requirement" value="Model portfolio photography">Model portfolio photography</option>
                        <option name="requirement" value="Passport photo services">Passport photo services</option>
                        <option name="requirement" value="Fashion photography">Fashion photography</option>
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
                        <option name="plan" value="Basic">Basic</option>
                        <option name="plan" value="Standard">Standard</option>
                        <option name="plan" value="Extended">Extended</option>
                        <option name="plan" value="Ultimate">Ultimate</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d2' >Name</label>
                        <input type="text" name="firstname" class="form-control alert alert-primary" placeholder="First+middle" >
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d3' >Surname</label>
                        <input type="text" name="lastname" class="form-control alert alert-primary" placeholder="last">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d4' >Email</label>
                        <input type="email" name="email" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d5' >Phone No.</label>
                        <input type="number" name="phone" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label id='d6' >Shoot title or Project Name</label>
                        <input type="text" name="project" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d7'>Start Date</label>
                        <input type="date" name="sdate" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d8' >End Date</label>
                        <input type="date" name="edate" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
            <td>
                    <div class="form-group">
                        <label id='d9' >Start Time</label>
                        <input type="time" name="stime" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d10' >End Time</label>
                        <input type="time" name="etime" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form-group">
                        <label id='d11' >Event location</label>
                        <input type="text" name="address1" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id='d12' >City/Village</label>
                        <input type="text" name="city" class="form-control alert alert-primary">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label id='d13' >Zip code/Postal</label>
                        <input type="text" name="zip" class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <div class="form-group">
                        <label id='d14' >Upload any govt id</label>
                        <input type="file" name="file"class="form-control alert alert-primary">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"  class="text-center">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg">
                        <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-lg">
                    </div>
                </td>
            </tr>
    </form>
</div>
</body>
</html>