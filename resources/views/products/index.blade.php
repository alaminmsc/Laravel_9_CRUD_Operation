@extends('products.layout');
@section('content')
    <div class="row" style="margin-top:20px;">
        <div style="col-lg-12 margin-tb">
            <h4 style="text-align:center;">Laravel 9 CRUD Application with Image Upload</h4>
        </div>
        <div class="pull-right">
            <a href="{{route('products.create')}}" class="btn btn-success">Add New Product</a>
        </div>
    </div>
    <br>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered" style="margin-top:20px;">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Details</th>
            <th>Image</th>
            <th width="280px;">Action</th>
        </tr>
        @foreach ($products as $product)

        <tr>
            <td>{{++$i}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td><img src="/images/{{$product->image}}" alt="" width="100px"></td>
            <td>
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                    <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Details</a>
                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$products->links()}}
@endsection
