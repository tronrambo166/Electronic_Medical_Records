@extends('layout')
@section('page') 

<style>
    .fontawesomesvg {width: 1em;
      height: 1em;
      vertical-align: -.125em;
    }
    .icons{font-size: 11px;}
    .icon-margin{margin-bottom: 11px;}



  </style>  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">
              <div class="col-sm-12">
                
                <ul class="d-block row breadcrumb mx-5 mr-5">
                  <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3"> <h3 class="page-title">Patient Details</h3></div>
                     <div class="col-sm-5"><h6 class="page-title">Last Visited: {{$patient->last_visit}} </h6></div>  
                     <div class="col-sm-3 ">
                      <a class="small float-right btn btn-info" href="{{route('report',$patient->id)}}">Exam</a>
                     </div>
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
        <div class="col-sm-2 px-0">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-stethoscope mr-1" aria-hidden="true"></i> </h5>  {{$patient->b_pressure}}
        </div>

       <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-heartbeat mr-1" aria-hidden="true"></i> </h5>  {{$patient->pulse_rate}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-thermometer-half mr-1" aria-hidden="true"></i> </h5>  {{$patient->b_temp}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><svg class='fontawesomesvg' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M320 0c17.7 0 32 14.3 32 32V164.1c0 16.4 8.4 31.7 22.2 40.5l9.8 6.2V165.3C384 127 415 96 453.3 96c21.7 0 42.8 10.2 55.8 28.8c15.4 22.1 44.3 65.4 71 116.9c26.5 50.9 52.4 112.5 59.6 170.3c.2 1.3 .2 2.6 .2 4v7c0 49.1-39.8 89-89 89c-7.3 0-14.5-.9-21.6-2.7l-72.7-18.2C414 480.5 384 442.1 384 398V325l90.5 57.6c7.5 4.7 17.3 2.5 22.1-4.9s2.5-17.3-4.9-22.1L384 287.1v-.4l-44.1-28.1c-7.3-4.6-13.9-10.1-19.9-16.1c-5.9 6-12.6 11.5-19.9 16.1L256 286.7 161.2 347l-13.5 8.6c0 0 0 0-.1 0c-7.4 4.8-9.6 14.6-4.8 22.1c4.7 7.5 14.6 9.7 22.1 4.9l91.1-58V398c0 44.1-30 82.5-72.7 93.1l-72.7 18.2c-7.1 1.8-14.3 2.7-21.6 2.7c-49.1 0-89-39.8-89-89v-7c0-1.3 .1-2.7 .2-4c7.2-57.9 33.1-119.4 59.6-170.3c26.8-51.5 55.6-94.8 71-116.9c13-18.6 34-28.8 55.8-28.8C225 96 256 127 256 165.3v45.5l9.8-6.2c13.8-8.8 22.2-24.1 22.2-40.5V32c0-17.7 14.3-32 32-32z"/></svg>
 </h5>  {{$patient->resp_rate}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-male mr-1" aria-hidden="true"></i> </h5>  {{$patient->height}}
        </div>

        <div class="col-sm-2">
          <h5 class="h6 font-weight-bold d-inline"><i class="fas fa-weight mr-1" aria-hidden="true"></i> </h5>  {{$patient->weight}}
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
       <h5 class="my-3">Summary</h5>
      <p class="text-dark small font-weight-bold">sdhfs shdfsd dhsfjsjdf suemmee suemmee sdhfs shdfsd dhsfjsjdf suemmee suemmee sdhfs shdfsd dhsfjsjdf suemmee suemmee sdhfs shdfsd dhsfjsjdf suemmee suemmee</p>
     </div>


     <div class="py-4"></div>
     <div class="row w-75 px-1 py-3 m-auto bg-light" style="">


     <div class=" col-sm-1 mr-1 ml-4 px-0">
     <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Action history</b>"
      ><i class="material-icons" style="font-size:36px">assignment</i> <span class="icons small text-center d-block">Actions</span></a>
     </div>

     <div class=" col-sm-1 mx-1 px-0">
      <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Patient history</b>"
      ><i class="fa fa-history fa-2x icon-margin" aria-hidden="true"></i> <span class="icons small text-center d-block">History</span></a>
     </div>

<div class=" col-sm-1 mx-1 px-0">
      <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Exam data from patient table</b>"
      ><i class="fa fa-male fa-2x icon-margin" aria-hidden="true"></i> <span class=" d-block icons small text-center my-1">Exam</span></a>
     </div>

<div class=" col-sm-1 mx-1 px-0">
      <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Reports & flowsheets</b>"
      ><i class="material-icons" style="font-size:36px">description</i> <span class="d-block my-1 icons small text-center">Reports</span></a>
     </div>

<div class=" col-sm-1 mx-1 px-0">
     <p class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Reports & flowsheets</b>"
      ><i class="fa fa-chart-line fa-2x icon-margin" aria-hidden="true"></i> <span class="icons small text-center d-block">FLowsheets</span></p>
     </div>

<div class=" col-sm-1 mx-1 px-0">
     <p class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Lab results & reports</b>"
      ><i class="fa fa-flask fa-2x icon-margin" aria-hidden="true"></i> <span class="icons small text-center d-block">Labratory</span></p>
     </div>

<div class=" col-sm-1 mx-1 px-0">
     <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Image files</b>"
      ><i class="material-icons" style="font-size:36px">camera_roll</i> <span class="icons small text-center d-block">Imaging</span></a>
     </div>

<div class=" col-sm-1 mx-1 px-0">
      <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Procedure data for patient</b>"
      ><i class="material-icons" style="font-size:36px">psychology</i> <span class=" d-block icons small text-center my-1">Procedures</span></a>
     </div>

<div class=" col-sm-1 mx-1 px-0">
      <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Recent Messages</b>"
      ><i class="fa fa-envelope fa-2x icon-margin" aria-hidden="true"></i> <span class=" d-block icons small text-center my-1">Messages</span></a>
     </div>

     <div class=" col-sm-1 mx-1 px-0">
      <a href="" class="text-dark text-center" data-html="true" data-toggle="tooltip" data-placement="top"title="<b>Analytical Insights</b>"
      ><i class="material-icons" style="font-size:36px"><span class="material-symbols-outlined">signal_cellular_alt</span></i> <span class=" d-block icons small text-center my-1">AI Insights</span></a>
     </div>



   </div>



     <div class="py-5"></div>
     <div class="py-5"></div>
               
<input type="text" hidden="" id="myStageName" value="{{$patient->stage_name}}">

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>




          @endsection
        
       

