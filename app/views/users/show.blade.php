@extends('layouts.default')

@section('content')

<div class="container">

	
	<h1><font face="Calibri" color="white" size="8">&nbsp; &nbsp; Personal Information </font></h1>
	<br>
  <div class="panel">

    <div class="container">
    <div class="row">

         
            <div class="col-md-4 col-md-offset-1">  
            <br>
            <table class="table table-striped table-hover ">
              <font color="white" size="5">
                <tr>
                  <br>
                    <center><img src="../images/zayn.jpg" class="img-thumbnail" alt="Cinque Terre" width="300" height="300"></center>
                    <center> ID: {{Auth::user()->id}} </center>
                </tr>
              </font>
            </table>
            </div>


            <div class="col-md-6">  
            <br>
            <table class="table table-striped table-hover ">
              <font color="white" size="5">
                <br>
                <tr>&nbsp; &nbsp; Name: {{ Auth::user()->name }} </tr> <br>
                <tr>&nbsp; &nbsp; Birthdate: {{ Auth::user()->bday }} </tr> <br>
                <tr>&nbsp; &nbsp; Address: {{ Auth::user()->address }} </tr> <br>
                <tr>&nbsp; &nbsp; Contact No: {{ Auth::user()->contact_no }} </tr>
                    
                                       

             
              </font>
            </table>
            </div>
          
        

        <br>
         
       
	
    </div>
    <center> <a class="btn btn-warning" href="{{ URL::route('editprofile', array('user' => Auth::user()->id)) }}"> Edit Profile &nbsp;<span class="glyphicon glyphicon-pencil	"></span></a></center>
  </div>
</div>
</div>

@stop