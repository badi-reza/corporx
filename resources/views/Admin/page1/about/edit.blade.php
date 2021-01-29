@extends('Admin.panel')

@section('content')

    <section class="col-8 offset-2 mt-5">
        <section class="bs-example">
            <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <section class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" name="name" class="form-control"
                           value="{{$about->name}}"  id="inputName" placeholder="Name" required>
                </section>


                <section class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control"
                           value="{{$about->title}}"  id="inputTitle" placeholder="Title" required>
                </section>

                <section class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="des" id="inputDescription" class="form-control" placeholder="description" cols="5" rows="5">
                        {{$about->des}}
                    </textarea>
                </section>


                <section class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="Image" required>
                    <img src="{{asset('images/about/'.$about->image)}}" alt=""
                         width="50px" height="50px">
                </section>

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </section>

@endsection
