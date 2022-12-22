@extends('layout')
@section('page')	
<!-- Page Wrapper -->
<style type="text/css">
	table th{font-size: 11px;}
</style>
<div class="page-wrapper">
                <div class="content container">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-10">
								
								<ul class="breadcrumb">
									<h3 class="page-title">List of Patient</h3>
								</ul>
							</div>
							<div class="col-sm-2 col">
								<a style="background: #224b6e;" href="{{route('add_patient')}}"  class="btn text-light float-right mt-2 font-weight-bold">Add New Patient</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table class="text-center datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Patient ID</th>
													<th>First Name</th>
													<th>Middle Name</th>
													<th>Last Name</th>
													<th>Body Temperature</th>
													<th>Pulse Rate</th>
													<th>Respitory Rate</th>
													<th>Blood Pressure</th>
													<th>Weight</th>
													<th>Height</th>
													<th>Main Diagnosis</th>
													<th>Prev Diagnosis</th>
													<th>Treatment</th>
													<th>Procedures</th>
													<th>Lab Record Id</th>
													<th>Last Visit</th>
													<th>Summery</th>
													<th>Hcp Id</th>
													<th>Insurance</th>
													<th>Pharmacy</th>
													<th>Email</th>
													<th>Address</th>
													<th>DOB</th>
													<th>Phone</th>
													<th>Symptoms</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
												@foreach($patient as $p)
												<tr>
													<td>#PT-{{$p->id}}</td>
													<td>
														<h6 class="table-avatar">
													
									<img width="30px" height="30px" class="avatar-img rounded-circle" src="images/patients/{{$p->image}}" alt="User Image">
								</a>
														<b>{{$p->f_name}}</b>	
														</h6>
													</td>

								<td>{{$p->m_name}}</td>
								<td>{{$p->l_name}}</td>
								<td>{{$p->b_temp}}</td>
								<td>{{$p->pulse_rate}}</td>
								<td>{{$p->resp_rate}}</td>
								<td>{{$p->b_pressure}}</td>
								<td>{{$p->weight}}</td>
								<td>{{$p->height}}</td>
								
								<td>{{$p->main_diag}}</td>
								<td>{{$p->prev_diag}}</td>
								<td>{{$p->treatment}}</td>
								<td>{{$p->procedures}}</td>
								<td>{{$p->lab_rec_id}}</td>
								<td>{{$p->last_visit}}</td>
								<td>{{$p->summery}}</td>
								<td>{{$p->hcp_id}}</td>
								<td>{{$p->insurance}}</td>
								<td>{{$p->pharmacy}}</td>
								<td>{{$p->email}}</td>
								<td>{{$p->address}}</td>
								<td>{{$p->dob}}</td>
								<td>{{$p->phone}}</td>
								<td>{{$p->symptoms}}</td>
								

								<td class="text-right"> 
								<div class="actions">
								<a style="font-size:11px;" class="btn btn-outline-success mb-2 w-100 py-0"  href="{{route('edit_patient',$p->id) }}">
								<i class="fe fe-pencil"></i> Edit
								</a>
								<a style="font-size:11px;" onclick="return confirm('Are you sure...?') "  href="{{route('delete_patient',$p->id)}}" class="btn btn-outline-danger py-0">
								<i class="fe fe-trash"></i> Delete
								</a>
								</div>
								</td>
													
												</tr>
												@endforeach
												
												
											</tbody>
										</table>
									</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
@endsection