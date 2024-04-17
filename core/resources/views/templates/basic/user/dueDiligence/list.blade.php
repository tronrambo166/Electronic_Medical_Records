@extends($activeTemplate.'layouts.dashboard')

@section('content')
<div class="body-wrapper">

    <div class="table-content">
        <div class="row">
            <div class="header-title">

                <!-- table -->
                <div class="table-area pt-20 pb-30">
                    <div class="dash-section-title my-escrow d-flex justify-content-between">
                        <h4>{{ $pageTitle }}</h4>
                        <a href="{{ route('user.diligence.create') }}"
                        class="btn btn--base me-0 me-xl-3">Add Due Giligence</a>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="table-area">
                                <table class="custom-table">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Verification Type</th>
                                            <th>Duration</th>
                                            <th style="width: 200px !important">Time & Date</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($diligences as $key => $data)
                                        <tr>
                                            <td data-label="Property Name">{{ $data->property->title }}</td>

                                            <td data-label="Verification Type" class="d-flex justify-content-center">
                                                @foreach($data->verification_type as $key => $value)
                                                <span class="status--btn status--btn-2 text-dark fw-bold mr-3" style="margin-right: 2px !important">{{ str_replace('_',' ',ucwords($value)) }}</span>

                                                @endforeach
                                            </td>

                                            <td data-label="Duration">
                                                {{ $data->duration }} Days
                                            </td>
                                            
                                            <td data-label="Time & Date">
                                                {{ diffForHumans($data->created_at) }}
                                             </td>
                                            <td data-label="Status">
                                                @if($data->status == 1)
                                                <span class="status--btn status--btn-2"> Approved</span>
                                                @elseif($data->status == 2)
                                                <span class="status--btn bg-danger"> Rejected</span>
                                                @else
                                                <span class="status--btn "> Pending</span>
                                                @endif

                                             </td>
                                            <td data-label="Action">
                                                <button href=""
                                                    class="s-icon me-0 me-xl-3 bg-danger deleteBtn" data-id="{{ $data->id }}"><i
                                                        class="las la-trash"></i></button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr><td colspan="100%" class="text-center">No Due Diligence Created Yet</td></tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination">
                                {{ paginateLinks($diligences) }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Due Diligence Delete Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('user.diligence.delete') }}" method="POST">
                @csrf
                    <input type="hidden" name="id" id="id">
                    <div>
                        <p class="text-danger text-start">Are You Sure To Delete This?</p>
                    </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger rounded">Yes, Delete</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection

@push('script')
<script>
    (function($){
        "use strict";
        $('.deleteBtn').on('click', function() {
            var modal = $('#deleteModal');
            var id = $(this).data('id');
            modal.find('input[name=id]').val(id);
            modal.modal('show');
        });

    })(jQuery);

</script>

@endpush
