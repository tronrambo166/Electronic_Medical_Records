@extends('layout')
@section('page')  

<div class="row">
              <div class="col-sm-12">
                
                <ul class="d-block row breadcrumb mx-5 mr-5">
                  <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5"> <h3 class="page-title">Patient Details</h3></div>
                     <div class="col-sm-6"><h6 class="page-title">Last Visited: {{$patient->last_visit}} </h6></div>  
                  </div>
                 
                 
                </ul>
              </div>
              
            </div>

<div class="row mx-auto" style="width:90%; ; min-height: 330px" >   


  <div class="col-md-5 my-3 text-center" style="" >
<div class="image text-center mt-3"> <img class="border border-dark img-fluid rounded" style="width: 230px; height: 230px" src="images/patients/{{$patient->image}}"></div>


   </div>


    <div class="col-md-6 my-3" style="background:white;" >
  
      <div class="row artist_info  mt-3">
        <div class="col-sm-6">
          <h5 class="h6 font-weight-bold d-inline">Name: </h5> <p href="" class="d-inline my-2"> {{$patient->f_name}} {{$patient->l_name}} </p>
        </div>

        <div class="col-sm-6">
          <h5 class="h6 font-weight-bold d-inline">DOB: </h5> <p href="" class="d-inline my-2"> {{$patient->dob}} </p>
        </div>
      
      </div>



       <div class="row artist_info  mt-3">
        <div class="col-sm-6">
          <h5 class="h6 font-weight-bold d-inline">Last Visit: </h5> <p href="" class="d-inline my-2"> {{$patient->f_name}} {{$patient->l_name}} </p>
        </div>

        <div class="col-sm-6">
          <h5 class="h6 font-weight-bold d-inline">CC: </h5> <p href="" class="d-inline my-2"> {{$patient->symptoms}}</p>
        </div>
      
      </div>


       <div class="row artist_info  mt-3">
        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-thermometer-half mr-1" aria-hidden="true"></i> </h5>  {{$patient->b_pressure}}
        </div>

       <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-thermometer-half mr-1" aria-hidden="true"></i> </h5>  {{$patient->pulse_rate}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-thermometer-half mr-1" aria-hidden="true"></i> </h5>  {{$patient->b_temp}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-thermometer-half mr-1" aria-hidden="true"></i> </h5>  {{$patient->b_temp}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-thermometer-half mr-1" aria-hidden="true"></i> </h5>  {{$patient->height}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-thermometer-half mr-1" aria-hidden="true"></i> </h5>  {{$patient->weight}}
        </div>
      
      </div>


 <div class="artist_info  mt-3">
      <h5 class="h6 font-weight-bold d-inline">Main Diagnosis: </h5> <p href="" class="d-inline my-2 text-danger"> {{$patient->main_diag}}</p>
      
      </div>



       <div class="artist_info  mt-3">
      <h5 class="h6 font-weight-bold d-inline">Previous Diagnosis: </h5> <p href="" class="d-inline my-2 text-success"> {{$patient->prev_diag}}</p>
      
      </div>



        <div class="artist_info  mt-3">
      <h5 class="h6 font-weight-bold d-inline">Treatment Plan: </h5> <p href="" class="d-inline my-2 text-success"> {{$patient->treatment}} </p>
      
      </div>


     </div> 
     </div> 

     <div class="w-75 px-5 py-3 m-auto  border border-dark" style="background:#d0d6dba3;">
       <h5 class="my-3">Summery</h5>
      <p class="text-dark small font-weight-bold">sdhfs shdfsd dhsfjsjdf suemmee suemmee sdhfs shdfsd dhsfjsjdf suemmee suemmee sdhfs shdfsd dhsfjsjdf suemmee suemmee sdhfs shdfsd dhsfjsjdf suemmee suemmee</p>
     </div>

     <div class="py-4"></div>
           

        
<input type="text" hidden="" id="myStageName" value="{{$patient->stage_name}}">

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>






          @endsection
        
       

