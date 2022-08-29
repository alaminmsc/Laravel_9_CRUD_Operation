@extends('products.layout')
@section('content')

<div class="row" style="margin-top:20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align:center">
            <h4>Add New Product</h4>
        </div>
        <div class="pull-right">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Woops@</strong><p>There were some problem with your input</p>
            @foreach($errors->all as $error)
                <li>{{$error}}</li>
            @endforeach
    </div>
@endif

    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" style="margin-top:20px;">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail</strong>
                    <textarea name="detail" class="form-control" style="height:150px;" placeholder="Product Details"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection