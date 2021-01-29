@extends('Admin.panel')

@section('content')

    <section class="col-8 offset-2 mt-5">
        <section class="bs-example">
            <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <section class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title"
                           value="{{$product->title}}"
                           required>
                </section>

                <section class="form-group">
                    <label for="inputPrice">Price</label>
                    <input type="text" name="price" class="form-control" id="inputPrice" placeholder="Price"
                           value="{{$product->price}}"
                           required>
                </section>

                <section class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="des" id="inputDescription" class="form-control" placeholder="description" cols="5" rows="5">

                        {{$product->des}}
                    </textarea>

                </section>

                <section class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="Image" required>
                    <img src="{{asset('images/product/'.$product->image)}}" alt=""
                         width="50px" height="50px">
                </section>

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </section>

@endsection
