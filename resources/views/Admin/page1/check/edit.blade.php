@extends('Admin.panel')

@section('content')

    <section class="col-8 offset-2 mt-5">
        <section class="bs-example">
            <form action="{{route('check.update',$check->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <section class="form-group">
                    <label for="inputTitle_one">Title_one</label>
                    <input type="text" name="title_one" class="form-control"
                           value="{{$check->title_one}}"  id="inputTitle_one" placeholder="Title One" required>
                </section>

                <section class="form-group">
                    <label for="inputTitle_two">Title_two</label>
                    <input type="text" name="title_two" class="form-control"
                           value="{{$check->title_two}}"  id="inputTitle_two" placeholder="Title Two" required>
                </section>


                <section class="form-group">
                    <label for="inputAlt">Alt</label>
                    <input type="text" name="alt" class="form-control"
                           value="{{$check->alt}}"  id="inputAlt" placeholder="Alt" required>
                </section>


                <section class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="Image" required>
                    <img src="{{asset('images/check/'.$check->image)}}" alt=""
                         width="50px" height="50px">
                </section>

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </section>

@endsection
