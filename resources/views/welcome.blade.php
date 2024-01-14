@extends('inc.layout')
@section('content')


<div class="jumbotron text-center mt-5">
    <h1 class="display-4 fst-italic">Laravel 10</h1>
    <hr class="my-4">
    <h1 style="font-size:10rem">
      <span class="text-success">C</span>
      <span class="text-primary">R</span>
      <span class="text-warning">U</span>
      <span class="text-danger">D</span>
    </h1>
    <a class="btn btn-dark mt-3 " role="button" href="{{ url('products') }}">Show Products</a>
  </div>


@endsection
