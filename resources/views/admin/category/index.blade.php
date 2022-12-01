
@extends('layouts.category')
@section('content')
    Hello, its Categories<br>
        <a href="{{route('admin.category.create')}}" class="btn btn-warning mb-2">Add Category</a>

        <a href="{{route('admin.category.recycle')}}" class="btn btn-warning mb-2" >Recycle</a>

    @if(count($categories) != 0)
        <table class="table table-success table-striped">
            <thead>
            <tr>
                @foreach($categories[0]->getAttributes() as $item => $p)
                    <th scope="col">{{$item}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    @foreach($category->getAttributes() as $p)
                        <th scope="col"><a href="{{route('admin.category.show',$category->id)}}">{{$p}}</a></th>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@endsection
