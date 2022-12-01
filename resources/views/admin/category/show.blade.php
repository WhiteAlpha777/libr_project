@extends('layouts.category')
@section('content')




    @if($category->deleted_at == NULL)
        <form action="{{route('admin.category.delete',$category->id)}}" method="post">
            @csrf
            @method('delete')
            Hello, its Category<br>
            <a href="{{route('admin.category.index')}}" class="btn btn-warning mb-1">Home</a>
            <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-warning mb-1">Edit</a>

            <input type="submit" value="Delete" class="btn btn-danger mb-1 "
                {{($books->count() !== 0) ? "disabled=\"disabled\"":"" }}>
        </form>
    @else
        <form action="{{route('admin.category.restoreone',$category->id)}}" method="post">
            @csrf
            Hello, its Recycled category(s)<br>
            <a href="{{route('admin.category.index')}}" class="btn btn-warning mb-1">Home</a>

            <input type="submit" value="Restore One" class="btn btn-warning mb-1">
        </form>
    @endif

    <div>
        Лот: {{$category->id}}<br>
        Название категории: {{$category->title }}<br>
        Используется книгами:
        @if($books != NULL)
            <br>
            @foreach($books as $item)
                {{$item->id}}. {{$item->title}}<br>
            @endforeach
        @else
         нет<br>
        @endif
        Удалена: {{$category->deleted_at == NULL ? 'нет' :'да'}}



    </div>

@endsection
