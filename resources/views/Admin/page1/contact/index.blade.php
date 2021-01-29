@extends('Admin.panel')

@section('content')

    <section class="col-10 offset-1 mt-5">
        <table class="table table-info">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comment as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{Str::limit($value->des,20)}}</td>
                    <td>
                        <form method="post" action="{{route('comment.destroy',$value->id)}}">
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
