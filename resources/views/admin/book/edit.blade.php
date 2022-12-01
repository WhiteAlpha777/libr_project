@extends('layouts.book')
@section('content')
    Hello, its book Edit page
    <div>
        <a href="{{route('admin.book.index')}}" class="btn btn-success mb-1">Home</a>
    </div>

    <form action="{{route('admin.book.update',$book->id)}}" method="post">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$book->title}}">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example"  name = "category_id">
                @foreach($categories as $category)
                    <option {{$book->category_id === $category->id ? 'selected':''}}
                        value="{{$category->id}}">
                        {{$category->title}}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary  mb-2">Update</button>
    </form>
@endsection
