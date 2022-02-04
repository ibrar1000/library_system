@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>View User Details</h4>
                @if(session()->has('message'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-warning text-center">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm table-hover">
                    <tr>
                        <td style = "width: 500px;">ID</td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td style = "width: 500px;">Facebook ID</td>
                        <td>
                            @if(empty($user->facebook_id))
                                Not Found
                            @else
                                {{ $user->facebook_id }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style = "width: 500px;">Google ID</td>
                        <td>
                            @if(empty($user->google_id))
                                Not Found
                            @else
                                {{ $user->google_id }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style = "width: 500px;">Apple ID</td>
                        <td>
                            @if(empty($user->apple_id))
                                Not Found
                            @else
                                {{ $user->apple_id }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style = "width: 500px;">Type</td>
                        <td>
                            @if($user->type == '1')
                                Buyer
                            @elseif($user->type == '2')
                                Freelancer
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $user->contact_no}}</td>
                    </tr>
                    {{--                    <tr>--}}
                    {{--                        <td>Birth of Date</td>--}}
                    {{--                        <td>{{ $user->dob }}</td>--}}
                    {{--                    </tr>--}}
                    <tr>
                        <td>Profile Image</td>
                        <td>
                            @if(!empty($user->image))
                                <img src="{{ asset($user->image) }}" alt="Profile Image" style = "width: 80px; height: 60px;">
                            @else
                                No Image Found
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>{{ $user->gender }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ $user->address }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection
