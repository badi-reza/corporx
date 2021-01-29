@extends('Admin.panel')

@section('content')

    <section class="col-8 offset-2 mt-5">
        <section class="bs-example">
            <form action="{{route('check.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <section class="form-group">
                    <label for="inputTitle_one">Title-one</label>
                    <input type="text" name="title_one" class="form-control" id="inputTitle_one" placeholder="Title-one" required>
                </section>

                <section class="form-group">
                    <label for="inputTitle_two">Title_two</label>
                    <input type="text" name="title_two" class="form-control" id="inputTitle_two" placeholder="Title_two" required>
                </section>

                <section class="form-group">
                    <label for="inputAlt">Alt</label>
                    <input type="text" name="alt" class="form-control" id="inputAlt" placeholder="Alt" required>
                </section>

                <section class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="Image" required>
                </section>

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </section>

@endsection
