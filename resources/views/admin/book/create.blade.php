@extends('layouts.book')
@section('content')
    Hello, its book Create page<br>
    <a href="{{route('admin.book.index')}}" class="btn btn-success mb-2">Home</a>
    <form action="{{route('admin.book.store')}}" method="post">
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
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                @foreach($categories as $category)
                    <option {{old('category_id') == $category->id ? 'selected':''}}
                            value="{{$category->id}}">
                        {{$category->title}}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mb-2">Create</button>
        </div>
    </form>
@endsection
