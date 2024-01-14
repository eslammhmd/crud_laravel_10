@extends('inc.layout')
@section('content')


    <div class="row mt-3">
        <div class="col-lg-12">
            <a class="btn btn-primary" role="button" href="{{ url('products/create') }}">Create New Product</a>
            <hr />
        </div>
    </div>


    @if ($msg = Session::get('success'))
      <div class="alert alert-success  alert-dismissible fade show" role="alert">
        <strong>{{$msg}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif



    <table class="table  table-striped table-hover table-responsive-sm">
        <thead>
            <tr class="text-capitalize">
                <th scope="col">No</th>
                <th scope="col">title</th>
                <th scope="col">decs</th>
                <th scope="col">price</th>
                <th scope="col">options</th>
            </tr>
        </thead>
        <tbody>
            @if (!@empty($products))
            @foreach ($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>
                   <div class="custom-options d-flex gap-1 ">

                    <form action="/products/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>

                    <div>
                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-info"><i class="fa-solid fa-wrench"></i></a>
                    </div>
                    <div>
                            <a href="{{ route('products.show', $item->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></i></a>
                    </div>
                   </div>
                </td>
            </tr>
            @endforeach
            @else
            <th>No Data Here</th>
            @endif
     
        </tbody>
    </table>
        <div class="row">
            <div class="d-flex">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>



@endsection
