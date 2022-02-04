@extends('layouts.user.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>View Racks</h4>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if($racks->count() > 0)
                    <table class="table table-sm table-hover">
                        <thead>
                        <th>ID</th>
                        <th>name</th>
                        <th>book Count</th>

                        </thead>
                        <tbody>
                        @foreach($racks as $rack)
                            <tr>
                                <td>{{ $rack->id }}</td>
                                <td>{{ $rack->name }}</td>
                                <td>{{ $rack->books_count }}</td>


{{--                                <td>--}}
{{--                                    <a href="{{ route('admin.racks.edit', $rack->id) }}" class = "btn btn-sm btn-info"><i class = "fa fa-pencil"></i></a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <form action="{{ route('users.destroy', $racks->id) }}" method = "POST">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        {{ method_field('DELETE') }}--}}
{{--                                        <button type = "submit" onclick = "return confirm('Are You Sure To Want to Delete?')" name = "submit" class = "btn btn-sm btn-danger"><i class = "fa fa-trash"></i></button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
{{--                    {{ $racks->links() }}--}}
                @else
                    <h4 style = "text-align:center">No User Found!</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
