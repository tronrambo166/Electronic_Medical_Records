@extends('layout')
@section('page') 

<style>
    .fontawesomesvg {width: 1em;
      height: 1em;
      vertical-align: -.125em;
    }
    .icons{font-size: 11px;}
    .icon-margin{margin-bottom: 11px;}
      .smalls{ font-size:13px;}
      .smalls2{ font-size:10px;}
      .h6{ font-size:13px;}


  </style>  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

<div class="row row w-75 mx-auto my-0" style="width:90%; ; min-height: 230px" >   


  <div class="col-md-12 border card shadow my-3 text-center smalls" style="" >

  
      <div class=" artist_info  mt-3">
        <div class="col-sm-3">
          <h5 class="h6 font-weight-bold d-inline">Name: </h5> <p href="" class="d-inline my-2"> {{$patient->f_name}} {{$patient->l_name}} </p>
        </div>

        <div class="col-sm-3">
          <h5 class="h6 font-weight-bold d-inline">DOB: </h5> <p href="" class="d-inline my-2"> {{$patient->dob}} </p>
        </div>

        <div class="col-sm-3">
          <h5 class="h6 font-weight-bold d-inline">Last Visit: </h5> <p href="" class="d-inline my-2"> {{$patient->f_name}} {{$patient->last_visit}} </p>
        </div>
      
      </div>



       <div class="row mt-2 ">
        <div class="col-sm-3 ">
      <h5 class="h6 font-weight-bold d-inline ml-2">Diagnosis: </h5> <p href="" class="d-inline my-2 text-danger"> {{$patient->main_diag}}</p>
      
      </div>

       <div class="col-sm-3">
          <h5 class="h6 font-weight-bold d-inline"><i class="fa fa-male mr-1" aria-hidden="true"></i> </h5>  {{$patient->height}}
        </div>

         <div class="col-sm-3">
          <h5 class="h6 font-weight-bold d-inline"><i class="fas fa-weight mr-1" aria-hidden="true"></i> </h5>  {{$patient->weight}}
        </div>
      
      </div>


       

     </div> 
     </div> 

      <div class="card w-75   m-auto">
     <div class=" shadow row w-100 py-1 mx-auto  border border-light" style="background:aliceblue;">
      <div class="col-sm-9">
       <h5 class="my-3">Report</h5>
      
      <div>
      
     </div>
<?php
$bp = 95;//$patient->b_pressure;
$hr = 90;//$patient->pulse_rate;
$bt = $patient->b_temp;
 
$dataPoints = array(
  array("y" => 150, "label" => "Sunday"),
  array("y" => 160, "label" => "Monday"),
  array("y" => 100, "label" => "Tuesday"),
  array("y" => $bp, "label" => "Wednesday"),
  array("y" => $bp, "label" => "Thursday"),
  array("y" => 130, "label" => "Friday"),
  array("y" => 150, "label" => "Saturday")
);

$dataPoints2 = array(
  array("y" => 77, "label" => "Sunday"),
  array("y" => $hr, "label" => "Monday"),
  array("y" => $hr, "label" => "Tuesday"),
  array("y" => $hr, "label" => "Wednesday"),
  array("y" => $hr, "label" => "Thursday"),
  array("y" => $hr, "label" => "Friday"),
  array("y" => 100, "label" => "Saturday")
);

$dataPoints3 = array(
  array("y" => $bt, "label" => "Sunday"),
  array("y" => $bt, "label" => "Monday"),
  array("y" => $bt, "label" => "Tuesday"),
  array("y" => $bt, "label" => "Wednesday"),
  array("y" => $bt, "label" => "Thursday"),
  array("y" => $bt, "label" => "Friday"),
  array("y" => $bt, "label" => "Saturday")
);
 
?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
   backgroundColor: "white",//"#f7f7f7",
   title: {
    text: "Last 7 days",
    fontSize:18,
  },
  axisX: {
          gridDashType: "dot"
        },
  axisY: {
    title: "",
    gridDashType: "dot",
    gridThickness: 0,
  },
  data: [{
    type: "line",
    markerSize: 3,
     name: "BP",
     showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  },
  {
    type: "line",
     markerSize: 3,
     name: "Heart rate",
     showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
  },
  {
    type: "line",
     markerSize: 3,
     name: "Body temperature",
     showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
  }]

});
chart.render();
 
}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>

<div class="col-sm-3">
  <h6 class="" style="margin-top: 220px;">Blood Pressure</h6>
   <div class="row " style="margin-top:10px;">
    
                      <div class="col-sm-4 link">
                      <button  id="gender" class="font-weight-bold  btn btn-danger smalls2"   value="artist"> High <p class="m-0">161/100</p></button>  </div> 

                       <div class="col-sm-4 link">
                      <button  id="gender" class="font-weight-bold  btn btn-warning smalls2"   value="artist"> Low <p class="m-0">161/100</p></button>  </div>

                       <div class="col-sm-4 link">
                     <button  id="gender" class="font-weight-bold  btn btn-success smalls2"   value="artist"> Mean <p class="m-0">161/100</p></button> </div>                                 
           
             </div>   


   <h6 class="my-3" >Heart Rate</h6>
   <div class="row " style="margin-top:10px;">
    
                      <div class="col-sm-4 link">
                      <button  style="width: 64px;" id="gender" class=" font-weight-bold  btn btn-danger smalls2"   value="artist"> High <p class="m-0">100</p></button>  </div> 

                       <div class="col-sm-4 link">
                      <button style="width: 64px;" id="gender" class="font-weight-bold  btn btn-warning smalls2"   value="artist"> Low <p class="m-0">58</p></button>  </div>

                       <div class="col-sm-4 link">
                     <button style="width: 64px;" id="gender" class="font-weight-bold  btn btn-success smalls2"   value="artist"> Mean <p class="m-0">70</p></button> </div>                                 
           
             </div>  

</div>

 </div>
</div>


<body>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                  
    


     <div class="py-4"></div>
  


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
        
       

