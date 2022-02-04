@extends('layouts.admin.app')

@section('content')
    <h1>Add New Book</h1>
    <hr>
    <form action="{{ route('store_book') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title"  name="title">
        </div>
        <div class="form-group">
            <label for="title">Rack Id</label>
            <input type="number" class="form-control" id="rack_id"  name="rack_id">
        </div>
        <div class="form-group">
            <label for="title">Author</label>
            <input type="text" class="form-control" id="author"  name="author">
        </div>
        <div class="form-group">
            <label for="title">Published Year</label>
            <input type="number" class="form-control" id="published_year"  name="published_year">
        </div>

        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
