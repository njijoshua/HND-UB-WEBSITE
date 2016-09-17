@extends('layouts.app')

@section('content')
   <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
   <div class="row  login1">
  
   <div class="col-md-12 well"> 
<form class="form-inline login" role="form">
  <div class="form-group">
     <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn nn">login</button>
</form>
</div>
</div>
<div id="contents">
        <div class="clearfix">
            <div class="sidebar">
                <div>
                      <hr class="soften">
                <h2 class="register">Need some guide?</h2>
                 <hr class="soften"/>
                  
                
                <p>
                1)If not fegisterd yet fill in the sign up form<br>
                2)fill in first and last name(english name)<br>
                3)enter your user name which can be a joketapositioning of your name in any orther<br>
                 4)enter a valid email address if you dont have go and create one<br>
                5)enter a well secured password of atlist 8 characters<br>
                6)chose your sex and check if your are a lecturer or a student<br>
                7)if you are a lecturer you can validate your sign up else you cose your level and input you age and validate<br>
                 7)if your have an accout just enter your email and password<br>
                </p>            <p>



                  <hr class="soften">
                <h4 class="register">Still having problems contact us?</h4>
                 <hr class="soften"/>
                    <ul class="contact">
                        <li>
                            <p>
                                <span class="home"></span> <em>Manes Winchester<br> Family Law Firm</em> the address city, state 1111
                            </p>
                        </li>
                        <li>
                            <p class="phone">
                                Phone: (+20) 000 222 999
                            </p>
                        </li>
                        <li>
                            <p class="fax">
                                Fax: (+20) 000 222 988
                            </p>
                        </li>
                        <li>
                            <p class="mail">
                                Email: info@hnd-ub.com
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main">
             <div class="main1 well">
            <hr class="soften">
                <h1 class="register">Register</h1>
                 <hr class="soften"/>
                
               
                <form class="form form-default" role="form">
 <div class="form-group">
     <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname">
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="password" class="form-control" id="lname">
  </div>
  <div class="form-group">
     <label for="user">User Name</label>
    <input type="text" class="form-control" id="user">
  </div>
  
   <div class="form-group">
     <label for="email">Email address</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <label for="pwd">Select sex</label><br>
  <label class="radio-inline">
      <input type="radio" name="sex">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="sex">Female
    </label>
    <label class="radio-inline">
      <input type="radio" name="sex">Other
    </label><br>
    <label for="pwd">you are a?</label><br>
  <label class="radio-inline">
      <input type="radio" name="option">Student
    </label>
    <label class="radio-inline">
      <input type="radio" name="option">Lecturer
    </label>

  <div class="form-group">
    <label for="pwd">Select Level</label>
   <select class="form-control" id="sel1">
    <option value="200">Level 200</option>
    <option value="300">Level 300</option>
    
    
  </select>
  </div>
  <label for="pwd">Enter your age</label>
  <div class="row">
  <div class="col-md-4">
  <label for="pwd">Day</label>
   <select class="form-control" id="sel1">
   <option value="1">1</option>
    <option value="2">2</option>
     <option value="3">3</option>
    <option value="4">4</option>
     <option value="5">5</option>
    <option value="6">6</option>
    
  </select>
  </div>
   <div class="col-md-4">
  <label for="pwd">Month</label>
   <select class="form-control" id="sel1">
     <option value="1">january</option>
    <option value="2">febuary</option>
     <option value="3">march</option>
    <option value="4">april</option>
     <option value="5">may</option>
    <option value="6">june</option>

     <option value="1991">1991</option>
    <option value="1990">1990</option>
    
  </select>
  </div>
   <div class="col-md-4">
  <label for="pwd">year</label>
   <select class="form-control" id="sel1">
    
     <option value="1997">1997</option>
    <option value="1996">1996</option>
     <option value="1995">1995</option>
    <option value="1994">1994</option>
     <option value="1993">1993</option>
    <option value="1992">1992</option>

     <option value="1991">1991</option>
    <option value="1990">1990</option><br>
    
    
  </select>
   </div>
  </div>
  
 <br>
  <!-- <div class="botton well">
  <button type="submit" class="btn nn">Register</button>
  </div> -->
<button type="button" class="btn  btn-lg btn-block nn">Register</button>
</form>
            </div>
        </div>
    </div>
    </div>
     <!-- jQuery -->
     <script src="jquery-1.12.3.min"></script>

    <!-- Bootstrap Core JavaScript -->
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 

@endsection
