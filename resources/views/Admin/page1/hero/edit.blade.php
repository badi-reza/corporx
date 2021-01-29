@extends('Admin.panel')

@section('content')

    <section class="col-8 offset-2 mt-5">
        <section class="bs-example">
            <form action="{{route('hero.update',$hero->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <section class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control"
                    value="{{$hero->title}}"       id="inputTitle" placeholder="Title" required>
                </section>

                <section class="form-group">
                    <label for="inputBrief">Brief</label>
                    <textarea name="brief" id="inputBrief" class="form-control" placeholder="Brief Description"
                              cols="5" rows="5">

                        {{$hero->brief}}
                    </textarea>
                </section>

                <section class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="Image" required>
                    <img src="{{asset('images/hero/'.$hero->image)}}" alt=""
                         width="50px" height="50px">
                </section>

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </section>

@endsection
