@extends('Admin.panel')

@section('content')

    <section class="col-10 offset-1 mt-5">
        <table class="table table-info">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Keywords</th>
                <th>Description</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($setting as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->author}}</td>
                    <td>{{Str::limit($value->keywords,20)}}</td>
                    <td>{{Str::limit($value->description,20)}}</td>
                    <td>
                        <form method="post" action="{{route('setting.destroy',$value->id)}}">
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
