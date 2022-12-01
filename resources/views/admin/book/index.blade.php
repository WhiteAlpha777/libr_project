@extends('layouts.book')

@section('content')
        Hello,{{auth()->user() ? auth()->user()->name.", ":"not authorized user, "}} its library<br>
        @can('view', auth()->user())
        <a href="{{route('admin.book.create')}}" class="btn btn-success mb-2">Add Book</a>

        <a href="{{route('admin.book.recycle')}}" class="btn btn-success mb-2" >Recycle</a>
        @endcan


        <form action="{{route('admin.book.index')}}" method="get">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option {{isset($_GET['category_id'])?:'selected'}}
                    value="0">
                    no category
                </option>
                @foreach($categories as $category)
                    <option {{isset($_GET['category_id']) && $_GET['category_id'] == $category->id ?
                        'selected':''}}
                            value="{{$category->id}}">
                        {{$category->id . ". " . $category->title}}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mb-2">Filter</button>



        </form>



        @if(count($books) != 0)
            <table class="table table-success table-striped">
                <thead>
                <tr>
                    @foreach($books[0]->getAttributes() as $item => $p)
                        <th scope="col">{{$item}}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        @foreach($book->getAttributes() as $p)
                            <th scope="col"><a href="{{route('admin.book.show',$book->id)}}">{{$p}}</a></th>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        {{$books->withQueryString()->links()}}
@endsection
