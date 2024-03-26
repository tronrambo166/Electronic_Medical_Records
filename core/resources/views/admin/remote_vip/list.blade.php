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
                                    <th>User Name</th>
                                    <th>Country</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($vip as $data)
                                    <tr>

                                        <td data-label="Property Name">{{ $data->title }}</td>

                                        <td data-label="@lang('User')">
                                            <span class="font-weight-bold">{{$data->user->fullname}}</span>

                                        </td>
                                        <td data-label="Country">{{ $data->country }}</td>
                                        <td data-label="Address">{{ $data->address }}</td>
                                        <td data-label="Email">{{ $data->email }}</td>
                                        <td data-label="Mobile">{{ $data->phone }}</td>

                                        {{-- <td data-label="Time & Date">
                                            {{ diffForHumans($data->created_at) }}
                                         </td> --}}

                                        <td data-label="Action">
                                            <a href="{{ route('admin.remotevip.details',$data->id) }}"
                                                class="btn btn--base  approved" data-id="{{ $data->id }}">
                                                <i class="las la-eye"></i>
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
                    {{ paginateLinks($vip) }}
                </div>
            </div>
        </div>
    </div>


@endsection

