@extends($activeTemplate.'layouts.dashboard')

@section('content')
<div class="body-wrapper">

    <div class="table-content">
        <div class="row">
            <div class="header-title">

                <!-- table -->
                <div class="table-area pt-20 pb-30">
                    <div class="dash-section-title my-escrow d-flex justify-content-between">
                        <div>
                            <h4>{{ $pageTitle }}</h4>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="table-area">
                                <table class="custom-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Date & Time</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($properties as $key => $data)
                                        <tr>
                                            <td data-label="Trx ID">{{ $data->title }}</td>

                                            <td data-label="Date"> {{ diffForHumans($data->created_at) }}
                                            </td>
                                            <td data-label="Action">
                                                <a href="{{ route('user.property.details',[$data->id, slug(@$data->title)]) }}"
                                                    class="s-icon bg--base me-0 me-xl-3"><i
                                                        class="las la-eye"></i></a>
                                                <a href="{{ route('user.my.listing.details',$data->id) }}"
                                                    class="s-icon bg-success me-0 me-xl-3"><i
                                                        class="las la-edit"></i></a>
                                                <button href=""
                                                    class="s-icon me-0 me-xl-3 bg-danger deleteBtn" data-id="{{ $data->id }}"><i
                                                        class="las la-trash"></i></button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr><td colspan="100%" class="text-center">No Listing Created Yet</td></tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination">
                                {{ paginateLinks($properties) }}
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
          <h5 class="modal-title text-dark" id="exampleModalLabel">Property Delete Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('user.my.listing.delete') }}" method="POST">
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
