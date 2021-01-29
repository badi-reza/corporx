@extends('Admin.panel')

@section('content')

    @if (session('delete'))
        <section class="col-6 offset-3 bg-success">
            <h4 class="text-center text-white">{{session('delete')}}</h4>
        </section>
    @endif

    @if (session('update'))
        <section class="col-6 offset-3 bg-success">
            <h4 class="text-center text-white">{{session('update')}}</h4>
        </section>
    @endif
    <section class="col-10 offset-1 mt-5">
        <table class="table table-info">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->price}}</td>
                    <td>{{Str::limit($value->des,20)}}</td>
                    <td><img src="{{asset("images/product/".$value->image)}}" alt="" width="50px" height="50px"></td>
                    <td>
                        <a href="{{route('product.edit',$value->id)}}">update</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy',$value->id)}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </section>

@endsection
