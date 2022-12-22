@extends('layout.mainlayout_admin')
@section('content')	
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Doctors</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="#add_doctor" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										

										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr> <th> See & edit slots </th>
													<th>Name</th>	
																								
													<th>Speciality</th>
													<th>Hospital</th>
													<th>Clinic</th>
													<th>Phone</th>
													<th>Rate</th>
													<th>book fee</th>
													<th>Available</th>
													<th>Location</th>
													<th>Offday</th>
													<th>Experience</th>
													
													<th class="text-right">Action</th>
												</tr>
										
											</thead>
										
											<tbody>				
												@foreach($doctor as $l)
												<tr>

													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_slots{{$l->id}}">
																<i class="fe fe-pencil"></i> Edit slots
															</a>
														</div>
													</td>



													<td>
													<h2 class="table-avatar">
															<a  class="avatar avatar-lg mr-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/doctors/{{$l->image}}" alt="User Image"></a>
															<a href="profile">{{$l->name}} </a>
														</h2>

															{{-- 
													</td>
														<td style="font-weight: bold;font-size:12px; color:blue;">
															Slots:{{$l->m_slots}}, <span class="d-inline text-warning">Status: @if($l->m_status==1)Acive @else Inactive</span> @endif</td>

														<td style="font-weight: bold;font-size:12px; color:blue;">
															Slots:{{$l->af_slots}}, <span class="d-inline text-warning">Status: @if($l->af_status==1)Acive @else Inactive</span> @endif</td>

														<td style="font-weight: bold;font-size:12px; color:blue;">
															Slots:{{$l->ev_slots}}, <span class="d-inline text-warning">Status: @if($l->ev_status==1)Acive @else Inactive</span> @endif</td>
															--}}


											 	<td>
														<h2 class="table-avatar">
															<a >
																@foreach($category as $lo)@if($lo->id==$l->category_id)
																{{$lo->name}} @endif @endforeach</a>
														</h2>
													
													<td>
														<h2 class="table-avatar">
															<a >	
																@foreach($hospital as $lo)@if($lo->id==$l->hospital_id)
																{{$lo->name}} @endif @endforeach</a>
														</h2>
													</td>

													<td>
														<h2 class="table-avatar">
															<a >	
																@foreach($clinic as $lo)@if($lo->id==$l->clinic_id)
																{{$lo->name}} @endif @endforeach</a>
														</h2>
													</td>

													<td>{{$l->phone}}</td>
													<td>{{$l->rate}}</td>
													<td>{{$l->book_fee}}</td>
													<td>{{$l->available}}</td>
													<td>{{$l->location}}</td>
													<td>{{$l->offday}}</td>
													<td>{{$l->exps}}</td>

													
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_specialities_details{{$l->id}}">
																<i class="fe fe-pencil"></i> Edit
															</a>
							<a onclick="return confirm('Are you sure...?') "  href="{{route('del_doctor',$l->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
											
											


									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
			
			
			
			<!-- Edit Details Modal -->

			<div class="modal fade" id="edit_specialities_details{{$l->id}}" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Doctor</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							
							<form action="{{route('up_doctor')}}"  method="post" enctype="multipart/form-data">
								@csrf
							<input  name="id" type="number" hidden value="{{$l->id}}" class="form-control">

								<div class="row ">
		    		<div class="col-sm-1"><label for="name"><strong>Email</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->email}}" type="email" name="email" id="email"   /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>




								<div class="row ">
		    		<div class="col-sm-1"><label for="name"><strong>Password</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->password}}" type="password" name="password" id="email"   /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>



						   	<div class="row ">
		    		<div class="col-sm-1"><label for="name"><strong>Name</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->name}}" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>


		    	<div class="row ">
		    		<div class="col-sm-1"><label for="name"><strong>Morning</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-4"> 
				
					</div>
					<div class="col-sm-3"> 

						 <select  name="m_status" class="form-control form-group"><option value="1">Active</option><option value="0">Inactive</option></select>	</div>
		    	</div>


	<div class="row ">
		    		<div class="col-sm-1"><label for="name"><strong>Afternoon</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-4"> 
					
					</div>
					<div class="col-sm-3"> 

						 <select  name="af_status" class="form-control form-group"><option value="1">Active</option><option value="0">Inactive</option></select>	</div>
		    	</div>

		    		<div class="row ">
		    		<div class="col-sm-1"><label for="name"><strong>Evening</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-4"> 
				
					</div>
					<div class="col-sm-3"> 

						 <select  name="ev_status" class="form-control form-group"><option value="1">Active</option><option value="0">Inactive</option></select>	</div>
		    	</div>




		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Category</strong></label></div>
		    		<div class="col-sm-1"></div>
					
		    		<div class="col-sm-7"> 
						<select required="" name="category_id" class="form-control">
							<option value="">Select a category</option>
									@foreach($category as $ll)
							<option @php if($ll->id==$l->category_id) echo 'selected'; @endphp value="{{$ll->id}}">{{$ll->name}}</option>
							@endforeach
						</select>					
					</div>
					<div class="col-sm-4"> </div>					
		    	</div>
								
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="id"><strong>Gender</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<select required="" name="gender" class="form-control"><option value="Male">Male</option><option value="Female">Female</option></select>					
					</div>					
		    	</div>
				
						<div class="row form-group">
		    		<div class="col-sm-1"><label for="email"><strong>Hospitals</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<select required="" name="hospital_id" class="form-control">
							<option value="">Select a hospital</option>
								@foreach($hospital as $ll)
							<option @php if($ll->id==$l->hospital_id) echo 'selected'; @endphp value="{{$ll->id}}">{{$ll->name}}</option>
							@endforeach
						</select>
					</div>				
						<div class="col-sm-4"> </div>
				
		    	</div>
		    		<div class="row form-group">
		    		<div class="col-sm-1"><label for="clinics"><strong>Clinics</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<select required="" name="clinic_id" class="form-control">
						<option value="">Select a Clinic</option>
							@foreach($clinic as $ll)
							<option @php if($ll->id==$l->clinic_id) echo 'selected'; @endphp value="{{$ll->id}}">{{$ll->name}}</option>
							@endforeach
						</select> 
					</div>					
						<div class="col-sm-4"> </div>				
		    	</div>
								
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Phone</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->phone}}"  type="text" name="phone" id="password" placeholder="Enter phone" /> 					
					</div>					
				<div class="col-sm-4"> </div>
	 	</div>
	 	
	 		<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Experience</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->exp}}"  type="text" name="exps" id="password" placeholder="Enter Exp" /> 					
					</div>					
				<div class="col-sm-4"> </div>
	 	</div>



		    		<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Location</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<select required="" class="form-control" id="location" name="location">
										  
												@foreach($location as $ll)
										 	 <option @if($ll->name==$l->location) selected @endif value="{{$ll->name}}">{{$ll->name}}</option>
										 	 @endforeach
										  	
										</select>
					</div>
					<div class="col-sm-4"> </div>
		    	</div>

		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Availability</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->available}}" type="text" name="available" id="name" placeholder="Enter Name"  /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>



		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Rate</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->rate}}"  type="number" name="rate" id="password" placeholder="Enter rate" /> 
	</div>
	<div class="col-sm-4"> </div>					
		    	</div>


		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Book_fee</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value="{{$l->book_fee}}"  type="number" name="book_fee" id="password" placeholder="Enter rate" /> 
	</div>
	<div class="col-sm-4"> </div>					
		    	</div>



		    	 	<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Offday</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					
						<input type="checkbox" name="offday[]" value="saturday" >Sat
						<input class="ml-2" type="checkbox" name="offday[]" value="sunday" >Sun
						<input class="ml-2" type="checkbox" name="offday[]" value="monday" >Mon
						<input class="ml-2"type="checkbox" name="offday[]" value="tuesday" >Tue
						<input class="ml-2"type="checkbox" name="offday[]" value="wednesday" >Wed
							<input class="ml-2"type="checkbox" name="offday[]" value="thursday" >Thu
						<input class="ml-2" type="checkbox" name="offday[]" value="friday" >Fri
						
						
						
	</div>
	<div class="col-sm-4"> </div>					
		    	</div>


		
				<div class="row form-group">
		    		<div class="col-sm-1 "><label for="photo"><strong>Upload Image</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input class=" form-group " type="file" name="image" id="photo" /> 
					</div>
					
		    	</div>
				
				<div class="clearfix"></div>
				
								<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
							</form>

						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Details Modal -->




<!-- EDIT SLOTS -->
	                   <?php 
	                     $i=1;
	                     $slot=DB::table('slot_dates')->where('slot_id',$l->id)->get();
											$date= date('Y-m-d');
											$newDate = date('Y-m-d',strtotime($date.' +'.$i.' days'));
											$newDate;
											 ?>

			<div class="modal fade" id="edit_slots{{$l->id}}" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Doctor</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div class="row TEXT_COLUMS">
		    		<div class="col-sm-3"><h4 for="name "><strong>Date</strong></h4></div>

		    		<div class="col-sm-3"> 
					<h4 class="text-center"> Morning </h4>
					</div>

					<div class="col-sm-3"> 
					<h4 class="text-center"> Afternoon </h4>
					</div>

					<div class="col-sm-3"> 
					<h4 class="text-center"> Evening </h4>
					</div>

		    	</div>
___________________________________________________________
							<form action="{{route('edit_slots')}}"  method="post" enctype="multipart/form-data">
								@csrf
							<input  name="id" type="number" hidden value="{{$l->id}}" class="form-control">
						   
 @foreach ($slot as $s)
		    	<div class="row ">
		    		<div class="col-sm-3"><label for="name"><strong> <?php echo date('Y-m-d',strtotime($date.' +'.($i-1).' days')); ?></strong></label></div>

		    		<div class="col-sm-3"> 
					<input min="0" class=" d-inline form-control form-group" value="{{$s->m_slots}}" type="number" name="m_slots{{$i}}" id="name" /> 
					</div>

						<div class="col-sm-3"> 
					<input min="0" class=" d-inline form-control form-group" value="{{$s->af_slots}}" type="number" name="af_slots{{$i}}" id="name" /> 
					</div>

						<div class="col-sm-3"> 
					<input min="0" class=" d-inline form-control form-group" value="{{$s->ev_slots}}" type="number" name="ev_slots{{$i}}" id="name" /> 
					</div>

		    	</div>  @php $i++; @endphp
  @endforeach

<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
		    </form>

</div>
</div>
</div>
</div>
<!-- EDIT SLOTS -->



				@endforeach

											</tbody>
										</table>



			
			
        </div>
		<!-- /Main Wrapper -->




<!-- /HIdden add form-->

 <div  class="modal fade" id="add_doctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    
      <div class="modal-body">
	
		    <form action="{{route('add_doctor')}}"  method="post" enctype="multipart/form-data">
		    @csrf	

		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Email</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="email" name="email" id="name" placeholder="Enter Email"  /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>


		    		<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Password</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="password" name="password" id="password" placeholder="Enter Password"  /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>



		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Name</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>

		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Category</strong></label></div>
		    		<div class="col-sm-1"></div>
					
		    		<div class="col-sm-7"> 
						<select required="" name="category_id" class="form-control">
							<option value="">Select a category</option>
								@foreach($category as $c)
							<option value="{{$c->id}}">{{$c->name}}</option>
							@endforeach
						</select>					
					</div>
					<div class="col-sm-4"> </div>					
		    	</div>

		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Location</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="text" name="location" id="name" placeholder="Enter Name"  /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>

		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Availability</strong></label></div>
		    		<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="text" name="available" id="name" placeholder="Enter Availability"  /> 
					</div>
					<div class="col-sm-4"> </div>
		    	</div>

								
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="id"><strong>Gender</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<select required="" name="gender" class="form-control"><option value="Male">Male</option><option value="Female">Female</option></select>					
					</div>					
		    	</div>
				
						<div class="row form-group">
		    		<div class="col-sm-1"><label for="email"><strong>Hospitals</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<select required="" name="hospital_id" class="form-control">
							<option value="">Select a Hospital</option>
								@foreach($hospital as $h)
							<option value="{{$h->id}}">{{$h->name}}</option>
							@endforeach
						</select>
					</div>				
						<div class="col-sm-4"> </div>
				
		    	</div>
		    		<div class="row form-group">
		    		<div class="col-sm-1"><label for="clinics"><strong>Clinics</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<select required="" name="clinic_id" class="form-control">
						<option value="">Select a Clinic</option>
								@foreach($clinic as $cl)
							<option value="{{$cl->id}}">{{$cl->name}}</option>
							@endforeach
						</select> 
					</div>					
						<div class="col-sm-4"> </div>				
		    	</div>
								
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Phone</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="text" name="phone" id="password" placeholder="Enter phone" /> 					
					</div>					
				<div class="col-sm-4"> </div>
				
				
	 	</div>
	 	
	 	<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Experience</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" value=""  type="text" name="exps" id="password" placeholder="Enter Exp" /> 					
					</div>					
				<div class="col-sm-4"> </div>
	 	</div>



		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Rate</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="number" name="rate" id="password" placeholder="Enter rate" /> 
	</div>
	<div class="col-sm-4"> </div>					
		    	</div>
		
				<div class="row form-group">
		    		<div class="col-sm-1 "><label for="photo"><strong>Upload Image</strong></label></div>
					<div class="col-sm-1"></div>
		    		<div class="col-sm-7"> 
					<input class=" form-group " type="file" name="image" id="photo" /> 
					</div>
					
		    	</div>
				
				<div class="clearfix"></div>
				
				<div class="row">
					<div class="col-sm-6"></div>
				<input type="submit" name="add" value="Add" class="mt-3 px-5 py-1 btn btn-outline-dark  font-weight-bold" />
				</div>
				
		    </form>


      </div>
    
    
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
			
<!-- /HIdden add form-->





@endsection