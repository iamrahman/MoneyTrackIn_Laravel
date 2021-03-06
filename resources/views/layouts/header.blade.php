<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Money TrackIn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/jquery.canvasjs.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/icon.png">
</head>
<style>
.notify_body{
  padding: 2px;
}
</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#660033; border: #660033;">
  <div class="container-fluid" style="background-color:#660033;">
    <div class="navbar-header" style="background-color:#660033;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/" style="background-color:#660033;color: #F0E68C; font-family:monospace;">
      <img src="img/icon.png" style="width:32px; float:left;"><strong>Money TrackIn</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#" style="color:white;">About Us</a></li>
        <li><a href="#" style="color:white;">Services</a></li>
        <li><a href="/contact_us" style="color:white;">Contacts</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      @if (Auth::check())
      <li><a href="/dashboard" style="color:#ffffff;"><span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
        <li><a href="/logout" style="color:#ffffff;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span style="color:white;" class="glyphicon glyphicon-bell"></span><span class="badge" style="background-color:red;">{{ count(Session::get('user_alert')) }}</span></a>
        <div class="dropdown-menu">
        <?php $i =1; ?>
        @foreach (Session::get('user_alert') as $data)
        <div class="notify_body"><strong><?php echo $i++.". " ?></strong>{{ $data->notification }}</div><br>
        @endforeach
        </div>
      </li>
      @else
      <li><a href="/signup" style="color:#ffffff;"><span class="glyphicon glyphicon-log-in"></span> Signup</a></li>
      @endif
      </ul>
    </div>
  </div>
</nav>
@yield('content')
</body>

</html>