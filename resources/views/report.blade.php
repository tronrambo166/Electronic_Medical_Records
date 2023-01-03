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


     <div class="border card shadow row w-75 px-5 py-3 m-auto  border border-dark" style="background:aliceblue;">
       <h5 class="my-3">Report</h5>
      
      <div>
      
     </div>
     <?php
 
$dataPoints = array(
  array("y" => 25, "label" => "Sunday"),
  array("y" => 115, "label" => "Monday"),
  array("y" => 25, "label" => "Tuesday"),
  array("y" => 5, "label" => "Wednesday"),
  array("y" => 10, "label" => "Thursday"),
  array("y" => 0, "label" => "Friday"),
  array("y" => 20, "label" => "Saturday")
);

$dataPoints2 = array(
  array("y" => 45, "label" => "Sunday"),
  array("y" => 15, "label" => "Monday"),
  array("y" => 45, "label" => "Tuesday"),
  array("y" => 5, "label" => "Wednesday"),
  array("y" => 40, "label" => "Thursday"),
  array("y" => 44, "label" => "Friday"),
  array("y" => 20, "label" => "Saturday")
);

$dataPoints3 = array(
  array("y" => 155, "label" => "Sunday"),
  array("y" => 55, "label" => "Monday"),
  array("y" => 25, "label" => "Tuesday"),
  array("y" => 25, "label" => "Wednesday"),
  array("y" => 10, "label" => "Thursday"),
  array("y" => 50, "label" => "Friday"),
  array("y" => 20, "label" => "Saturday")
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
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
    markerSize: 5,
     name: "BP",
     showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  },
  {
    type: "line",
     name: "Male",
     showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
  },
  {
    type: "line",
     name: "Male",
     showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
  }]

});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                  
     </div>


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
        
       

