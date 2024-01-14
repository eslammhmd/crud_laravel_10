@extends('inc.layout')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <a class="btn btn-primary" role="button" href="{{ url('products') }}">My Products</a>
            <hr />
        </div>
    </div>

   @if ($errors->any())
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

<div class="custom" style="width:500px ; margin:0 auto">
    <form action="{{ route('products.update',$product->id ) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label  class="form-label">Enter Title</label>
            <input type="text" required name="title" class="form-control" value="{{$product->title}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea class="form-control" required name="description"  rows="3">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label  class="form-label">Enter Price</label>
            <input type="text" required name="price"  class="form-control" value="{{$product->price}}">
        </div>
            <button class="btn btn-primary" type="submit">Update</button>
    </form>
</div>

@endsection
