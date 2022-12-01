@extends('layouts.category')
@section('content')
    This is Recycle page<br>

            <form action="{{route('admin.category.restore')}}" method="post">
                @csrf
                @method('post')
                <a href="{{route('admin.category.index')}}" class="btn btn-warning mb-2" >Home</a>
                <input type="submit" value="Restore all" class="btn btn-warning mb-2">
            </form>
        <div>
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
                    @foreach($categories as $item)
                        <tr>
                            @foreach($item->getAttributes() as $p)
                                <th scope="col"><a href="{{route('admin.category.show',$item->id)}}">{{$p}}</a></th>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

        </div>

@endsection
