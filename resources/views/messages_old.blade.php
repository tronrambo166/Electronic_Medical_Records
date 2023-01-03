@extends('layout') 
@section('page')



<div class="row " style="background: #e5efef;">  
         <style type="text/css"> .drop li:hover{ background:darkgrey;}</style>

<div class="container  w-75 shadow border my-5">
   <div class="row top mt-5">
      
      
   </div>


<div class="row text-center  bg-light mb-5 py-2 font-weight-bold "><h3 class="text-dark m-auto">Messages</h3></div>



<div class="row">
   
   <div class="col-sm-3 ">
   
   
   </div> 
   
   <div class="col-sm-1"></div>
   
   
      <div class="col-sm-7">


<?php 
$user_id=Session('name'); 
//outgoing
?> 
  

          @foreach($messages as $row) 
           @if($user_id ==$row->USER_ID) 
  
<div class="row " >  
<div class="col-sm-12 pt-1">
   
   <div class="row my-2">
      
      <div class="col-sm-6"> 
         <b class="bg-light  p-2 rounded my-2">{{ $row->user_name }}</b>
      
      <p style="background:aliceblue" class="small  rounded p-2 my-1">  {{ $row->message }} </p>      
      </div>
      <div class="col-6 "></div>
    
   </div>
   </div>
   </div>
   @else
   
 <?php  ////incoming   ?>

<div class="row" >   

<div class="col-sm-12 pt-1">
   
   <div class="row my-2">
   
   <div class="col-6 "></div>
      
      <div class="col-6"> <b class="bg-success p-2 rounded my-2">Me</b>
      
      <div class="w-sm-100"><p style="background:aliceblue" class="small text-dark  rounded p-2  my-1">  {{ $row->message }} </p>
         </div>
      
      </div>    
   </div>
   
   </div>
   </div>
   @endif
   @endforeach


<div class="row text-center mx-auto  mt-3 post_top my-3shadow border  font-weight-bold w-sm-75"> 
<div class="col-sm-3"> <span class="bg-light  text-center"></span>Type Here:</div>

<div class="col-sm-9">

 <form class="" action="{{route('send_msg')}}" method="post"> @csrf
 <div class="row">
   <div class="col-sm-9">
   <textarea required="" name="text" id="text" type="text" cols="30" rows="2" class="form-control" placeholder="Write a message..."></textarea>
   <small class="text-danger font-italic"></small>
 </div>


 <div class="col-sm-3"> 
 <input type="submit" class=" px-2 border border-dark  font-weight-bold  mt-2  text-dark " href="" name="shout" value="SEND" />
 </div>
 
  </div>

 
 </form>

</div>



</div>


<a name="bottomOfPage"></a>



</div>


</div>
</div>

           
          
</div>



          @endsection
        
       

