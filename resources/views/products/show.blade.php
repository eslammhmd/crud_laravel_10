@extends('inc.layout')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <a class="btn btn-primary" role="button" href="{{ url('products') }}">My Products</a>
            <hr />
        </div>
    </div>


    <div class="custom" style="width:500px ; margin:0 auto">
        <div class="mb-3">
            <small class="text-danger">No :</small><input type="text"   class="form-control" value="{{$product->id}}">
        </div>
        <div class="mb-3">
            <small class="text-danger">Title :</small><input type="text"   class="form-control" value="{{$product->title}}">
        </div>
        <div class="mb-3">
            <small class="text-danger">Description :</small><textarea class="form-control"   rows="3">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <small class="text-danger">Price :</small><input type="text"   class="form-control" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <small class="text-danger">created at :</small><input type="text"   class="form-control" value="{{$product->created_at}}">
        </div>
        <div class="mb-3">
            <small class="text-danger">updatedat :</small><input type="text"   class="form-control" value="{{$product->updated_at}}">
        </div>
</div>

@endsection
