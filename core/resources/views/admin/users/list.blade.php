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
                                    <th>Full Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Country</th>
                                    <th class="text-center">Joined At</th>
                                    <th class="text-center">Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                    <tr>
                                        <td data-label="@lang('User')">
                                            <span class="font-weight-bold">{{$user->fullname}}</span>

                                        </td>
                                        <td data-label="@lang('User')">
                                            <a class="text-dark" href="{{ route('admin.users.detail', $user->id) }}"> <span class="font-weight-bold">{{$user->email}}</a>
                                        </td>


                                        <td data-label="@lang('Email-Phone')">
                                            {{ $user->mobile }}
                                        </td>
                                        <td data-label="@lang('Country')">
                                            <span class="font-weight-bold" data-toggle="tooltip" data-original-title="{{ @$user->address->country }}">{{ @$user->address->country }}</span>
                                        </td>



                                        <td data-label="@lang('Joined At')">
                                            {{ showDateTime($user->created_at) }} <br> {{ diffForHumans($user->created_at) }}
                                        </td>


                                        <td data-label="Status" class="text-center"><span class="badge badge--base">Active</span></td>

                                        <td data-label="Action">
                                            <a href="{{ route('admin.users.detail', $user->id) }}" class="btn btn--base">
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
                    {{ paginateLinks($users) }}
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- @push('breadcrumb-plugins')
    <form action="{{ route('admin.users.search', $scope ?? str_replace('admin.users.', '', request()->route()->getName())) }}" method="GET" class="form-inline float-sm-right bg--white">
        <div class="input-group has_append">
            <input type="text" name="search" class="form-control" placeholder="@lang('Username or email')" value="{{ $search ?? '' }}">
            <div class="input-group-append">
                <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
@endpush --}}
