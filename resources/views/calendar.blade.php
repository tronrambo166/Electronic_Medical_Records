<?php //calendar5/
   include('calendar5/includes/loader.php');
   $_SESSION['token'] = time();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ajax Full Featured Calendar 5">
    <meta name="author" content="Paulo Regina">

    <!-- styles -->
    <link href="calendar5/lib/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="calendar5/lib/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="calendar5/lib/spectrum/spectrum.css" rel="stylesheet">
    <link href="calendar5/lib/flatpickr/flatpickr.min.css" rel="stylesheet">
   <link href="calendar5/css/style.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
<body class="p-0">


    <!-- Layout -->
<div class="container-fluid mt-0 pt-0">
     <div class="row mb-2" style="background:#090917;">

@if(Auth::check())
@php $photo = Auth::user()->image; @endphp
<nav class=" navbar navbar-expand-lg navbar-light w-100 py-0">
  
  <div class=" collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav links">
      <li class="nav-item h4  text-light  mr-1 ">
       <img src="images/logo.png" class="rounded-circle" width="70px" height="55px"> 
      </li>

      <li class="nav-item h4  text-light  mr-5 mt-2">
       <h3>EMR</h3>
      </li>

      <li class="nav-item ">
        <a class="{{ Request::is('home') ? 'text-success' : 'text-light' }}
        nav-link font-weight-bold" href="home">Home </a>
      </li>
      <li class="nav-item">
        <a class=" {{ Request::is('calendar') ? 'text-success' : 'text-light' }}
        nav-link font-weight-bold" href="calendar">Calendar</a>
      </li>
      <li class="nav-item">
        <a class="{{ Request::is('messages') ? 'text-success' : 'text-light' }}
        nav-link   font-weight-bold" href="messages">Messages</a>
      </li>
      <li class="nav-item">
        <a class="{{ Request::is('patient') ? 'text-success' : 'text-light' }}
        nav-link font-weight-bold" href="patient">Patient</a>
      </li>

    </ul>

<ul class="ml-auto">
 
     <li class="nav-item dropdown has-arrow logged-item">
              <a href="#" class="text-light dropdown-toggle dropdown-icon nav-link" data-toggle="dropdown">
                <span class="user-img">
                 <!-- <img class="rounded-circle" 
                  src="@if('false'!==false)  @else assets_admin/img/patients/ @endif"
                   width="31" alt=""> -->
                   <img src="images/hcp/{{$photo}}" class="mr-2 rounded-circle" width="45px" height="45px"> 
                </span> {{Auth::user()->fname}} 
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="user-header">  
               
                </div>

                 <a class="dropdown-item pl-2" href="{{route('profile_settings')}}" >
                        <button style="background: none;border: none;font-size: 15px;"class="  " type="submit">Profile Settings </button> </a>
                        

                <a class=" dropdown-item pl-3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

              </div>
            </li>
            
</ul>
@endif

  </div>
</nav>
</div>

    <!-- Layout -->

    <!-- Calendar Modal -->
    <div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="details-body-title"></h4>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="loadingDiv"></div>

            <!-- QuickSave/Edit FORM -->
            <form id="modal-form-body">
               <p>
                  <label>Title: </label>
                  <input class="form-control" name="title" value="" type="text">
                </p>
                <p>
                  <label>Description: </label>
                  <textarea class="form-control" name="description"></textarea>
                </p>
                <p>
                    <label>Category: </label>
                    <select name="categorie" class="form-control">
                        <?php 
                     foreach($calendar->getCategories() as $categorie)
                     {
                        if(isset($_SESSION['filter']))
                           $_SESSION['filter'] = str_replace('&amp;', '&', $_SESSION['filter']);
                        echo '<option value="'.$categorie.'">'.$categorie.'</option>';
                     }
                        ?>
                    </select>
                </p>
                <p>
                   <label>Event Color:</label>
                   <input type="text" class="form-control input-sm" value="#587ca3" name="color" id="colorp">
                </p>
                <div class="pull-left mr-10">
                  <p id="repeat-type-select">
                  <label>Repeat:</label>
                  <select id="repeat_select" name="repeat_method" class="form-control">
                        <option value="no" selected>No</option>
                        <option value="every_day">Every Day</option>
                        <option value="every_week">Every Week</option>
                        <option value="every_month">Every Month</option>
                  <option value="every_year">Every Year</option>
                  </select>
                    </p>
                </div>
                <div class="pull-left">
                  <p id="repeat-type-selected">
                  <label>Times:</label>
                  <select id="repeat_times" name="repeat_times" class="form-control">
                     <option value="1" selected>1</option>
                  <?php
                            for($i = 2; $i <= 30; $i++) {
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                  </select>
                    </p>
                </div>
                <div class="clearfix"></div>
                <p id="event-type-select">
                    <label>Type: </label>
                    <select id="event-type" name="all-day" class="form-control">
                        <option value="true">Make Event 24H (All Day)</option>
                        <option value="false">Custom</option>
                    </select>
                </p>
                <div id="event-type-selected">
                  <div class="pull-left mr-10">
                     <p>
                     <label>Start Date:</label>
                     <input type="text" name="start_date" class="form-control input-sm flatpickr" placeholder="" id="startDate">
                        </p>
                    </div>
                    <div class="pull-left">
                     <p>
                        <label>Start Time:</label>
                     <input type="text" class="form-control input-sm flatpickr" name="start_time" placeholder="" id="startTime">
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pull-left mr-10">
                     <p>
                     <label>End Date:</label>
                     <input type="text" class="form-control input-sm flatpickr" name="end_date" placeholder="" id="endDate">
                        </p>
                    </div>
                    <div class="pull-left">
                     <p>
                     <label>End Time:</label>
                     <input type="text" class="form-control input-sm flatpickr" name="end_time" placeholder="" id="endTime">
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            <div class="custom-fields">
            <?php
               $form->generate();
            ?>
            </div>
            </form>

            <!-- Modal Details -->
            <div id="details-body">
                <div id="details-body-content"></div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" id="export-event" class="btn btn-warning">Export</button>
            <button type="button" id="delete-event" class="btn btn-danger">Delete</button>
            <button type="button" id="edit-event" class="btn btn-info">Edit</button>
            <button type="button" id="add-event" class="btn btn-primary">Add</button>
            <button type="button" id="save-changes" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Delete Prompt -->
    <div id="cal_prompt" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
         <a href="#" class="btn btn-danger" data-option="remove-this">Delete this</a>
            <a href="#" class="btn btn-danger" data-option="remove-repetitives">Delete all</a>
         <a href="#" class="btn btn-default" data-bs-dismiss="modal">Close</a>
        </div>
        </div>
        </div>
    </div>

    <!-- Modal Edit Prompt -->
    <div id="cal_edit_prompt_save" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body-custom"></div>
        <div class="modal-footer">
         <a href="#" class="btn btn-info" data-option="save-this">Save this</a>
            <a href="#" class="btn btn-info" data-option="save-repetitives">Save all</a>
         <a href="#" class="btn btn-default" data-bs-dismiss="modal">Close</a>
        </div>
        </div>
        </div>
    </div>

    <!-- Import Modal -->
    <div id="cal_import" class="modal fade">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Import Event</h4>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body-import" style="white-space: normal;">
               <p class="help-block">Copy & Paste the event code from your .ics file, open it using a text editor.</p>
               <textarea class="form-control" rows="10" id="import_content" style="margin-bottom: 10px;"></textarea>
               <input type="button" class="pull-right btn btn-info" onClick="calendar.calendarImport()" value="Import" />
            </div>
         </div>
        </div>
    </div>

    <input type="hidden" name="cal_token" id="cal_token" value="<?php echo $_SESSION['token']; ?>" />

    <!---------------------------------------------- THEME ---------------------------------------------->

   <nav class="navbar  navbar-expand-lg navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="index.php">Calendar</a>
         <!-- search (required if you want to have search) -->
         <form id="search" class="d-flex">
            <input class="form-control me-2" type="text">
            <button class="btn btn-outline-success" type="button">Search</button>
         </form>
      </div>
   </nav><!-- .navbar -->

   <div class="container" style="margin-top: 80px;">

     <!-- <a href="export.php" class="btn btn-warning float-end">Export</a>
      <a href="#cal_import" class="btn btn-info float-end me-2" data-bs-toggle="modal" data-bs-target="#cal_import">Import</a> -->

      <div class="clearfix"></div>

      <!-- Filter by Category (required if you want to have categories filtering) -->
      <?php if($calendar->getCategories() !== false) { ?>
      <div id="cat-holder">
      <form id="filter-category">
          <select class="form-control input-sm" style="width: auto;">
            <?php
            $selected = (isset($_SESSION['filter']) && $_SESSION['filter'] == 'all-fields' ? 'selected' : '');
            echo '<option '.$selected.' value="all-fields">All</option>';
            foreach($calendar->getCategories() as $categorie)
            {
               $selectedLoop = (isset($_SESSION['filter']) && $_SESSION['filter'] == $categorie ? 'selected' : '');
               echo '<option '.$selectedLoop.' value="'.$categorie.'">'.$categorie.'</option>';
            }
         ?>
          </select>
      </form>
      </div>
      <?php } ?>
     
      <div class="box">
        <div class="header"></div>
        <div class="content">
            <div id="calendar"></div>
         <div id="loading" class="spinner">
           <div class="bounce1"></div>
           <div class="bounce2"></div>
           <div class="bounce3"></div>
         </div>
        </div>
    </div>

    <div class="container-fluid px-0 ">
       
        
        <footer>
            <div class="row  bg-dark fixed-bottom">
                <p class="small m-auto  text-secondary py-3">&copy; Copyright 2020. EMR, All Rights Reserved</p>
            </div>
        </footer>
        
    </div>

    </div> <!-- /container --> </div>

   <script src="calendar5/lib/moment.js"></script>
    <script src="calendar5/lib/jquery.js"></script>
    <script src="calendar5/lib/bootstrap/bootstrap.js"></script>
    <script src="calendar5/lib/fullcalendar/fullcalendar.js"></script>
    <script src="calendar5/lib/fullcalendar/lang-all.js"></script>
   <script src="calendar5/lib/spectrum/spectrum.js"></script>
   <script src="calendar5/lib/flatpickr/flatpickr.js"></script>
   <script src="calendar5/js/custom.js"></script>
   <script src="calendar5/js/jquery.calendar.js"></script>
   <script src="calendar5/js/g.map.js"></script>  
    <script src="//maps.googleapis.com/maps/api/js" defer></script>

    <!-- call calendar plugin -->
    <script type="text/javascript">
      $().FullCalendarExt({
         calendarSelector: '#calendar',
         lang: 'en',
         tooltip: false,
         fc_extend: {
            nowIndicator: true 
         }
      });
   </script>

</body>
</html>
