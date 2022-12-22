@extends('layout') 
@section('page') 

<!-- Breadcrumb -->
	@php 
 $patient=DB::table('patients')->where('email',Session::get('patient_email'))->first();

 @endphp
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="home">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					
						<!-- /Profile Sidebar -->
						
						<div class="col-md-10 col-lg-10 col-xl-10 mx-auto">
							<div class="card">
								<div class="card-body">
									
									<!-- Profile Settings Form -->

								<form method="post" action="{{route('profile_save')}}" enctype="multipart/form-data"> @csrf
								
								<input name="id" value="{{$hcp['id']}}" type="number" hidden >

										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
															<img width="100" height="70" src="@if(strpos($hcp['image'], 'https')!==false) {{$hcp['image']}} @else images/hcp/{{$hcp['image']}} @endif" alt="User Image">
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input type="file" name="image" class="upload">
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input name="name" value="{{$hcp['name']}}" type="text" class="form-control" >
												</div>
											</div>
											
										
											
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email</label>
													<input name="email"  value="{{$hcp['email']}}" type="email" class="form-control" >
												</div>
											</div>
										
											
											
										</div>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Profile Settings Form -->
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
            <!-- /Page Content -->
</div>
@endsection