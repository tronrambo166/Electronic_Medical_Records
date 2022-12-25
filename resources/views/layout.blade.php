

<!DOCTYPE HTML>
<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <title>Electronic Medical Records System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

   <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	
    <link rel="stylesheet" type="text/css" href="style.css">
   
{{-- Vue component files --}}
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/http-vue-loader"></script>
  {{-- Vue component files --}}
  
</head>
<body>
<div class="container-fluid">
    
    
       
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


    @yield('page')


<div class="container-fluid px-0 ">
       
        
        <footer>
            <div class="row  bg-dark fixed-bottom">
                <p class="small m-auto  text-secondary py-3">&copy; Copyright 2020. EMR, All Rights Reserved</p>
            </div>
        </footer>
        
    </div>
    </div>
    
    
    


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
       <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

{{-- Vue files --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js"></script>


       





<script>


</script>



</body>
</html>
