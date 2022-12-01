@extends('layouts.book')

@section('content')
    @if($book->deleted_at == NULL)
        Hello, its book<br>
        <div class="row">
            <form class="col-md-2" action="{{route('admin.book.delete',$book->id)}}" method="post">
                @csrf
                @method('delete')
                <a href="{{route('admin.book.index')}}" class="btn btn-success mb-1">Home</a>
                @can('view', auth()->user())
                <a href="{{route('admin.book.edit',$book->id)}}" class="btn btn-success mb-1 ">Edit</a>

                <input type="submit" value="Delete" class="btn btn-danger mb-1  col-md-4"
                    {{$book->is_rented ? "disabled=\"disabled\"" : ''}}>
                @endcan
            </form>

            <form class="col-md-3" action="{{route('admin.book.rent',$book->id)}}" method="post">
                @csrf
                <input type="submit" value="{{$book->is_rented ? "UnRent" : "Rent"}}" class="btn btn-danger mb-1"
                    {{(!(auth()->user()))||(auth()->user())&&($book->is_rented) && ($book->user->id!=auth()->user()->id) ? "disabled=\"disabled\"" : ''}}>
            </form>

        </div>
    @else
        <form action="{{route('admin.book.restoreone',$book->id)}}" method="post">
            @csrf
            Hello, its Recycled book(s)<br>
            <a href="{{route('admin.book.index')}}" class="btn btn-success mb-1">Home</a>

            <input type="submit" value="Restore One" class="btn btn-success mb-1">
        </form>
    @endif

    <div>
        Лот: {{$book->id}}<br>
        Название: {{$book->title }}<br>
        В аренде у: {{$book->is_rented ? $book->user->name:'нет'}}<br>
        Категория: {{$book->category->title}}<br>
        Удалена: {{$book->deleted_at == NULL ? 'нет' :'да'}}
    </div>

@endsection
