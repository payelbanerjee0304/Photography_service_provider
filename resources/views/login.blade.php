<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payel Creation</title>
    <style type="text/css">
        body{
            background-image:url('img/loginbg.jpg');
            background-size:cover;
        }
        table{
            background-image:url('img/tablepic.jpg');
        background-size:cover;
        }
        #d1,#d2,#d3{
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
        #b1{
            background-color: black;
			color: red;
            font-size: 25px;
            text-shadow: 1px 1px 2px white, 0 0 100em #0007F0, 0 0 0.2em #0007F0;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <form method='post' action='{{url("/save")}}'>
        @csrf
        <header class='modal-header alert alert-success'>
        <marquee scrollamount='10' onmouseover='this.stop();' onmouseout='this.start();'>
		    <h1><strong>Existing User Login Page</strong></h1>
        </marquee>
        </header>
        <div class="table responsiv">
        <table class='table table-hover table-border'>
            <tr>
                <td>
                    <div class="form-group">
                        <label id="d1">Enter Username:</label>
                        <input type="text" name="username" class="form-control alert alert-primary" placeholder="Username as email" >
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id="d2" >Enter Password:</label>
                        <input type="password" name="password" class="form-control alert alert-primary" placeholder="Password as phone" >
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Login" class="btn btn-success btn-lg">
                        <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-lg">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label id="d3" >New User  &#8594</label>
                        <a href="{{url('/signin')}}" id="b1">Click here...</a>
                    </div>
                </td>
            </tr>
    </form>
</div>
</body>
</html>