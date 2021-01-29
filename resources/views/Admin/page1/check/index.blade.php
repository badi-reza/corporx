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
                <th>Title_One</th>
                <th>Title_Two</th>
                <th>Alt</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($check as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title_one}}</td>
                    <td>{{$value->title_two}}</td>
                    <td>{{$value->alt}}</td>
                    <td><img src="{{asset("images/check/".$value->image)}}" alt="" width="50px" height="50px"></td>
                    <td>
                        <a href="{{route('check.edit',$value->id)}}">update</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('check.destroy',$value->id)}}">
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
