@extends('Admin.panel')

@section('content')

    <section class="col-8 offset-2 mt-5">
        <section class="bs-example">
            <form action="{{route('setting.store')}}" method="post">
                @csrf
                <section class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" required>

                </section>

                <section class="form-group">
                    <label for="inputAuthor">Author</label>
                    <input type="text" name="author" class="form-control" id="inputAuthor" placeholder="Author" required>

                </section>

                <section class="form-group">
                    <label for="inputKeywords">Keywords</label>
                    <textarea name="keywords" id="inputKeywords" class="form-control" placeholder="Keywords" cols="5" rows="5"></textarea>

                </section>

                <section class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="description" id="inputDescription" class="form-control" placeholder="Description" cols="5" rows="5"></textarea>

                </section>

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </section>

@endsection
