@extends('layouts.category')
@section('content')
    Hello, its category Create page<br>

    <a href="{{route('admin.category.index')}}" class="btn btn-warning mb-2">Home</a>

    <form action="{{route('admin.category.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                value="{{ old('title')}}"
                type="text" name="title" class="form-control" id="title" placeholder="title">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary mb-2">Create</button>
        </div>
    </form>
@endsection
