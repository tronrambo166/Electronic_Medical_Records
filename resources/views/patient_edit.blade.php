@extends('layout')
@section('page')
<style type="text/css">
	.form-control{font-size: 11px;}
	.small{color: grey; font-weight: 500;}
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col-sm-12 px-5 col-auto">
								
								<ul class="breadcrumb">
									<h3 class=" page-title">Update Patient</h3>
								</ul>
							</div>
							
						</div>
					</div>


					<!-- /Page Header -->
					<div class="row pt-0">
						<div class="col-sm-12">
							<div class=" pt-0">
								<div class="px-5 pt-0">
								
									<!-- /HIdden add form-->

 <div  class="" id="add_jobs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="w-100 m-0" role="document">
    <div class="modal-content w-100">
      <div class="modal-header"> Update Form
        
      </div>
    
    
      <div class="modal-body w-100" style="background:#f8fcff;">
	
		    <form action="{{route('up_patient')}}"  method="post" enctype="multipart/form-data">
		    @csrf	
		    <input hidden type="number" name="id" value="{{$p->id}}">
							
							
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label class="small" for="name"><strong>Name:</strong></label></div>

		    		<div class="col-sm-1"> </div>
		    		
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="f_name" id="title" value="{{$p->f_name}}"  /> 
					</div>

					
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="m_name" id="title" value="{{$p->f_name}}"  /> 
					</div>

					
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="l_name" id="title" value="{{$p->l_name}}"  /> 
					</div>

					<div class="col-sm-4"> </div>
		    	</div>


		    	<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Body Temperature</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="b_temp" id="password" value="{{$p->b_temp}}"  /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Pulse Rate</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="pulse_rate" id="password" value="{{$p->pulse_rate}}"  /> 
					</div>

					
		    	</div>




		    	<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Respitory Rate</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="resp_rate" id="password" value="{{$p->resp_rate}}"  /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Blood Pressure</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="b_pressure" id="password" value="{{$p->b_pressure}}"  /> 
					</div>

					
		    	</div>




		    	<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Weight:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="weight" id="password" value="{{$p->weight}}"  /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Height:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="height" id="password" value="{{$p->height}}"  /> 
					</div>

					
		    	</div>


		    	
		    	<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Main Diagnosis:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="main_diag" id="password" value="{{$p->main_diag}}"  /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Prev Diagnosis:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="prev_diag" id="password" value="{{$p->prev_diag}}"  /> 
					</div>

					
		    	</div>

		       	<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Treatment:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<select required="" name="treatment" class="form-control">
								<option value="ToDo">Select</option>
								@foreach($treatment as $t)
								<option @if($t->t_name == $p->treatment) selected @endif value="{{$t->t_name}}">{{$t->t_name}}</option>
								@endforeach
						</select>	
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Procedures:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<select required="" name="procedures" class="form-control">
								<option  value="ToDo">Select</option>
								@foreach($procedures as $t)
								<option @if($t->proc_name == $p->procedures) selected @endif value="{{$t->proc_name}}">{{$t->proc_name}}</option>
								@endforeach
						</select>		
					</div>

					
		    	</div>


		    		<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Lab Record Id:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="number" name="lab_rec_id" value="{{$p->lab_rec_id}}"   /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Last Visit:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="date" name="last_visit" id="password" value="{{$p->last_visit}}" /> 
					</div>

					
		    	</div>


		    		<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Summery:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="summery" id="password" value="{{$p->summery}}" /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Hcp Id:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="number" name="hcp_id" value="{{$p->hcp_id}}" /> 
					</div>

					
		    	</div>


		    		<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Insurance:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="insurance" id="password" value="{{$p->insurance}}"  /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Pharmacy:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="pharmacy" id="password" value="{{$p->pharmacy}}"  /> 
					</div>

					
		    	</div>


		    		<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>Email:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="email" id="password" value="{{$p->email}}" /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Address:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="address" id="password" value="{{$p->address}}"  /> 
					</div>

					
		    	</div>


		    		<div class="row form-group">

		    	<div class="col-sm-2"><label class="small" for="password"><strong>DOB:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="date" name="dob" value="{{$p->dob}}" /> 
					</div>

					<div class="col-sm-1"></div>

					<div class="col-sm-2"><label class="small" for="password"><strong>Phone:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="phone" value="{{$p->phone}}" placeholder="Phone"  /> 
					</div>

					
		    	</div>



		    	
		
				<div class="row form-group">


					<div class="col-sm-2"><label class="small" for="password"><strong>Symptoms:</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-2"> 
					<input required="" class="form-control form-group" type="text" name="symptoms" value="{{$p->symptoms}}" placeholder="Symptoms"  /> 
					</div>
						<div class="col-sm-6"> </div>

				<div class="clearfix py-5"></div> <br>
				
								<button type="submit" class="ml-3 w-25  btn btn-primary btn-block font-weight-bold">Update</button>
							</form>
      </div>
    
    
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
			
<!-- /HIdden add form-->



								</div>
							</div>
						</div>			
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
			<div class="clearfix py-4"></div>
			
			
			

			
			
      
@endsection