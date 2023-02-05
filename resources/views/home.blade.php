@extends('layout')
@section('page')  
<!-- Page Wrapper -->
<style type="text/css">
  table th{font-size: 11px;}
</style>


<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
       

<div class="page-wrapper">
                <div class="content container">
        
          <!-- Page Header -->
          <div class="page-header">
            <div class="row">
              <div class="col-sm-10">
                
                <ul class="breadcrumb">
                  <h3 class="page-title">Patient Priority List</h3>
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

                    <table class="text-center datatable table table-hover table-center mb-0" id="myTable">
                      <thead>
                        <tr>
                      <th>Patient ID</th>
                          <th>First Name</th>
                          <th>Middle Name</th>
                          <th>Last Name</th>
                          <th>Birthdate</th>
                          <th>Deathdate</th>
                          <th>SSN</th>
                          <th>Drivers</th>
                          <th>Passport</th>
                          <th>Prefix</th>
                          <th>Suffix</th>
                          <th>Marital</th>
                          <th>Race</th>
                          <th>Ethnicity</th>
                          <th>Gender</th>
                          <th>Birthplace</th>
                          <th>Address</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($patient as $p)
                        <tr>
                          

                <td>{{$p->pat_id}}</td>
                <td>{{$p->f_name}}</td>
                <td>{{$p->m_name}}</td>
                <td>{{$p->l_name}}</td>
  
                <td>{{$p->birthdate}}</td>
                <td>{{$p->deathdate}}</td>
                <td>{{$p->ssn}}</td>
                <td>{{$p->drivers}}</td>
                
                <td>{{$p->passport}}</td>
                <td>{{$p->prefix}}</td>
                <td>{{$p->suffix}}</td>
                <td>{{$p->marital}}</td>
                <td>{{$p->race}}</td>
                <td>{{$p->ethnicity}}</td>
                <td>{{$p->gender}}</td>
                <td>{{$p->birthplace}}</td>
                <td>{{$p->address}}</td>
                

                <td class="text-right"> 
                <div class="actions">

                  <a style="font-size:11px;" class="btn btn-outline-info mb-2 w-100 py-0"  href="{{route('patient-single', $p->id)}}">
                <i class="fe fe-pencil"></i> View
                </a>

                <!-- <a style="font-size:11px;" class="btn btn-outline-success mb-2 w-100 py-0"  href="{{route('edit_patient',$p->id) }}">
                <i class="fe fe-pencil"></i> Edit
                </a>
                <a style="font-size:11px;" onclick="return confirm('Are you sure...?') "  href="{{route('delete_patient',$p->id)}}" class="btn btn-outline-danger py-0">
                <i class="fe fe-trash"></i> Delete
                </a> -->
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
    
        </div> <div class="py-5"></div>
    <!-- /Main Wrapper -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

        <script type="text/javascript">
    $(document).ready(function () {
    $('#myTable').DataTable();
});
        </script>

@endsection