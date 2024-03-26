@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="table-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-wrapper table-responsive">
                            <table class="custom-table small">
                                <thead>
                                <tr class="custom-table-row">
                                    <th>Property Name</th>
                                    <th>Duration</th>
                                    <th>Verification Type</th>
                                    <th style="width: 200px !important">Time & Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($diligences as $data)
                                    <tr>

                                        <td data-label="Property Name">{{ $data->property->title }}</td>

                                        <td data-label="Duration">
                                            {{ $data->duration }} Days
                                        </td>
                                        <td data-label="Verification Type" class="d-flex justify-content-center">
                                            @foreach($data->verification_type as $key => $value)
                                            <span class="text--small badge font-weight-normal badge--success fw-bold mr-3" style="margin-right: 2px !important">{{ str_replace('_',' ',ucwords($value)) }}</span>

                                            @endforeach
                                        </td>
                                        <td data-label="Time & Date">
                                            {{ diffForHumans($data->created_at) }}
                                         </td>
                                        <td data-label="Status">
                                            @if($data->status == 1)
                                            <span class="text--small badge font-weight-normal badge--success"> Approved</span>
                                            @elseif($data->status == 2)
                                            <span class="text--small badge font-weight-normal badge--danger"> Rejected</span>
                                            @else
                                            <span class="text--small badge font-weight-normal badge--warning"> Pending</span>
                                            @endif

                                         </td>
                                        <td data-label="Action">
                                            <a href="javascript:void(0)"
                                                class="btn btn--base  approved" data-id="{{ $data->id }}">
                                                <i class="las la-check"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn--base bg-danger ml-2 rejected" data-id="{{ $data->id }}">
                                                <i class="las la-ban"></i>
                                            </a>
                                        </td>


                                    </tr>
                                    @empty
                                        <tr>
                                            <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-4">
                    {{ paginateLinks($diligences) }}
                </div>
            </div>
        </div>
    </div>

    <!-- approved Modal -->
    <div class="modal fade" id="approvedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Due Diligence Approved Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.diligence.approved') }}" method="POST">
                    @csrf
                        <input type="hidden" name="id" id="id">
                        <div>
                            <p class="text-dark text-start">Are You Sure To Approved This?</p>
                        </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success rounded">Yes, Approved</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    <!-- rejectrd Modal -->
    <div class="modal fade" id="rejectedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Due Diligence Rejected Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.diligence.rejected') }}" method="POST">
                    @csrf
                        <input type="hidden" name="id" id="id">
                        <div>
                            <p class="text-danger text-start">Are You Sure To Rejected This?</p>
                        </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger rounded">Yes, Rejected</button>
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
        $('.approved').on('click', function() {
            var modal = $('#approvedModal');
            var id = $(this).data('id');
            modal.find('input[name=id]').val(id);
            modal.modal('show');
        });
        $('.rejected').on('click', function() {
            var modal = $('#rejectedModal');
            var id = $(this).data('id');
            modal.find('input[name=id]').val(id);
            modal.modal('show');
        });

    })(jQuery);

</script>

@endpush

