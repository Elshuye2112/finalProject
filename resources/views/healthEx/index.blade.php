
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Health-extension</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <style>
   .navbar, .nav-header, .nav-logo, .final{
      width: 100%;
      height: 30%;
      background-color:aqua;
      margin-top:0%;

   
   
   }
   .nav-header{
   display: flex;
   }
   .left{
      float: left;
      width: 30%;
      background-color:dimgray;
      height:400px ;
      width:20%;

   }
   .right{
      float: right;
      width: 70%;
   }

   </style>
</head>
<body>
  
    <div class="navbar" >
        <!-- Navbar logo -->
        <div class="nav-header">
          <div class="nav-logo">
              <img src="assets/logo.jpg"  width="50px" alt="logo is no available" />
          </div>
          <div class="final" >
            Community based health Insurance infromation System
          </div>
           <div> <a class="ai-achievement">logout</a></div>
        </div>
        <!-- responsive navbar toggle button -->
        {{--  <input type="checkbox" id="nav-check">
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>  --}}
        </div>
   <div class='left'>
   <ul>
   <li> <a href="{{ url('/register') }}" class='active'>register</a></li>
   <li>  <a href="{{ url('/renew') }}">renew</a></li>
   <li>  <a href="{{ url('/sendnotification') }}" >send notification</a></li>
   <li><a href="{{url('/viewnotification') }}" >View notification</a></li>
    </ul>
   </div> 
   <div id='content' class='right'>
   @yield('content')
   </div> 
   <div></div>
   </div>
</body>
</html>