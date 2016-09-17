<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/ddf.png">
    <title>HND-UB college of technology</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- my style sheet for the welcome page -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
  <!--   <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
       
            <div id="header">
        <div class="clearfix">
            <div class="logo">
                <a href="index.html"><img src="images/logo3.png" alt="LOGO" height="52" width="362"></a>
            </div>
            <ul class="navigation">
                <li class="active">
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="about">About</a>
                </li>
                <li>
                    <a href="library">Library</a>
                </li>
                <li>
                    <a href="admissions">Admissions</a>
                </li>
                <li>
                    <a href="Register">Accounts</a>
                </li>
                <li>
                    <a href="contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
        
    </nav>

   

    @yield('content')

   <div id="footer">
        <div class="clearfix">
            <div class="section">
                <h4>Latest News</h4>
                <p>
                    The admition into the first year of the HND is corrently going on interested candidate should compile thire documents and pressent it at the faculty of education first flow room 8
                </p>
            </div>
            <div class="section contact">
                <h4>Contact Us</h4>
                <p>
                    <span>Address:</span> the address city, state 1111
                </p>
                <p>
                    <span>Phone:</span> (+20) 000 222 999
                </p>
                <p>
                    <span>Email:</span> info@hnd-ub.com
                </p>
            </div>
            <div class="section">
                <h4>SEND US A MESSAGE</h4>
                <p>
                    If you're having problems or any thought you can send us a mail by cliking the button below and we are going to get to you soonest.
                </p>
                <a href="contact" class="subscribe">Click to send us an email</a>
            </div>
        </div>
        <div id="footnote">
            <div class="clearfix">
                <div class="connect">
                    <a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
                </div>
                <p>
                    © Copyright 2016 SET team. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!-- jQuery -->
   <!--  <script src="jquery-1.12.3.min"></script> -->

    <!-- Bootstrap Core JavaScript -->
  <!--   <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->


</body>
</html>
