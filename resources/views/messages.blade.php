@extends('layout') 
@section('page')

<p class="float-right bg-primary text-light px-3 text-center">@if(Session::has('success')) {{Session::get('success')}} @php Session::forget('success'); @endphp @endif</p>

<div class="row " >  
         <style type="text/css"> .drop li:hover{ background:darkgrey;}
      .smalls{ font-size:13px;}</style>

<div class="container  w-75 shadow border mb-5 mt-3" style="background: #e5efef;">
      
    <div class="row w-25  mx-0 mb-4">
                      <div class="col-sm-6 link">
                      <button  id="gender" class="font-weight-bold  btn btn-success smalls" onclick="gender();"  value="artist"> Messages</button>  </div> 

                       <div class="col-sm-6 link">
                      <button  id="country" class=" smalls font-weight-bold btn " onclick="country();"  value="artist">Reminders</button>  </div>
                                           
             </div>         

<!-- Messages -->
<div id="gender_div" class="text-center  py-2 font-weight-bold "><h3 class="text-dark m-auto">Messages</h3>

<div class="row  mt-4">
      <table class="text-center datatable table table-hover table-center mb-0">
                                 <thead>
                                    <tr>
                                       <th>Patient ID</th>
                                       <th>From</th> 
                                        <th>Message</th> 
                                         <th width="30%">Reply</th>   
                                       <th>Date</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($messages as $p)
                                    <tr>
                        <td>{{$p->USER_ID}}</td>                  
                        <td>{{$p->user_name}}</td>
                        <td>{{$p->message}}</td>

                        <td><form class="" action="{{route('send_msg')}}" method="post"> @csrf
                         <div class="row">
                           <div class="col-sm-9 pr-0">
                           <textarea style="font-size: 10px;margin-bottom: 0px;" required="" name="text" id="text" type="text" cols="10" rows="1" class="pr-0 form-control" placeholder="Write a message..."></textarea>
                           <small class="text-danger font-italic"></small>
                         </div>


                         <div class="col-sm-3 px-0"> 
                         <input type="submit" class="px-3 pb-1 border border-dark  font-weight-bold   text-dark " href="" name="shout" value="SEND" />
                         </div>
                         
                          </div>  </form></td>

                        @php 
                         list($date)= explode(' ', $p->created_at);  $time=     explode(' ', $p->created_at);
                         $time=end($time);$time=date_create($time); $time = date_format($time,'h:i');  
                         $date=date_create($date); $date = date_format($date,'M d, Y'); 
                        @endphp

                        <td>{{$date}}</td>

                        <td class="text-right"> 
                        <div class="actions">

                           
                        <a style="font-size:11px;" onclick="return confirm('Are you sure...?') "  href="{{route('del_msg',$p->ID)}}" class="btn btn-outline-danger py-0">
                        <i class="fe fe-trash"></i> Delete
                        </a>
                        </div>
                        </td>
                                       
                                    </tr>
                                    @endforeach
                                    
                                    
                                 </tbody>
                              </table>
</div> </div>
<!-- Messages -->


<!-- Reminders -->
<div id="country_div" class="text-center  py-2 font-weight-bold ">
   <div class="row">
       <div class="w-25"> </div>
      <div class="w-50"><h3 class=" m-auto text-dark ">Reminders</h3> </div>

   <div class="w-25"><form class="float-right" action="{{route('add_rem')}}" method="post"> @csrf
                         <div class="row">
                           <div class="col-sm-8 ">
                           <input style="font-size:12px" required="" name="reminder" type="text" class="small py-0 form-control" placeholder="Type reminder"/>
                         </div>

                         <div class="col-sm-3 px-0"> 
                         <input type="submit" class=" px-3 border border-dark  font-weight-bold pb-1 smalls text-dark " href="" name="shout" value="Add" />
                         </div>
                         <div class="col-sm-1"></div> </div>  </form>
     </div>     
     </div>                

<div class="row  mt-4">
      <table class="text-center datatable table table-hover table-center mb-0">
                                 <thead>
                                    <tr>
                                       <th>SL</th>
                                        <th>Reminder</th>   
                                       <th>Added on</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>

                         @php $i=1; @endphp           
                        @foreach($reminder as $p)
                        <tr>
                        <td>{{$i++}}</td>                  
                        <td>{{$p->reminder}}</td>



                        @php 
                         list($date)= explode(' ', $p->created_at);  $time=     explode(' ', $p->created_at);
                         $time=end($time);$time=date_create($time); $time = date_format($time,'h:i');  
                         $date=date_create($date); $date = date_format($date,'M d, Y'); 
                        @endphp

                        <td>{{$date}}, {{$time}}</td>

                        <td class="text-right"> 
                        <div class="actions text-center">

                           
                        <a style="font-size:11px;" onclick="return confirm('Are you sure...?') "  href="{{route('del_reminder',$p->id)}}" class="btn btn-outline-danger py-0">
                        <i class="fe fe-trash"></i> Delete
                        </a>
                        </div>
                        </td>
                                       
                                    </tr>
                                    @endforeach
                                    
                                    
                                 </tbody>
                              </table>
</div> </div>
<!-- Reminders -->


</div>


<a name="bottomOfPage"></a>



</div>


</div>
</div>

           
          
</div>

<div class="py-5"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<input type="text" id="show_div" hidden="" value="{{Session::get('show_div')}}">
<script type="text/javascript">
    $(window).on("load", hide);
  function hide(){ 
     var div = $('#show_div').val();
     
     if(div == 'gender_div'){
      $('#'+div).hide();
       $('#gender').removeClass('btn-success');
       $('#country').addClass('btn-success');
       }
       else  $('#country_div').hide();
     }
     

    function gender(){
    $('#gender_div').show();
    $('#country_div').hide();
    
    $('#country').removeClass('btn-success');
    $('#gender').addClass('btn-success');
    }

    function country(){
    $('#gender_div').hide();$('#country_div').removeClass('collapse');
    $('#country_div').show();

    $('#country').addClass('btn-success');
    $('#gender').removeClass('btn-success');
    
    }

</script>

          @endsection
        
       

