@extends('layouts.category')
@section('content')
    Hello, its catagory Edit page
    <div>
        <a href="{{route('admin.category.index')}}" class="btn btn-warning mb-1">Home</a>
    </div>

    <form action="{{route('admin.category.update',$category->id)}}" method="post">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$category->title}}">
        </div>

        <button type="submit" class="btn btn-primary  mb-2">Update</button>
    </form>
@endsection
