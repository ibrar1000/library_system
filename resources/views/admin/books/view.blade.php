@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>View Books</h4>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if($books ->count() > 0)
                    <table class="table table-sm table-hover">
                        <thead>
                        <th>ID</th>
                        <th>title</th>
                        <th>Author</th>
                        <th>Published Date</th>
                        <th>Rack ID</th>

                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->published_year }}</td>
                                <td>{{ $book->rack_id }}</td>
                                <td>
{{--                                    <form action="{{ route('delete_book', $book) }}" method = "delete">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        <button type = "submit" onclick = "return confirm('Are You Sure To Want to Delete?')" name = "submit" class = "btn btn-sm btn-danger"><i class = "fa fa-trash"></i></button>--}}
{{--                                    </form>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h4 style = "text-align:center">No book Found</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
