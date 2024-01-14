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
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Enter Title</label>
            <input type="text" required name="title" class="form-control" id="exampleInputText1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" required name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputText2" class="form-label">Enter Price</label>
            <input type="text" name="price" required class="form-control" id="exampleInputText2" aria-describedby="textHelp">
        </div>
            <button class="btn btn-primary" type="submit">Add</button>
    </form>
</div>

@endsection
