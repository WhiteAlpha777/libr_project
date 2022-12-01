@extends('layouts.book')
@section('content')
    This is Recycle page<br>

            <form action="{{route('admin.book.restore')}}" method="post">
                @csrf
                @method('post')
                <a href="{{route('admin.book.index')}}" class="btn btn-success mb-2" >Home</a>
                <input type="submit" value="Restore all" class="btn btn-success mb-2">
            </form>
        <div>
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

        </div>

@endsection
