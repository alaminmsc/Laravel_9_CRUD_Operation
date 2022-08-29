@extends('products.layout')
@section('content')

<div class="row" style="margin-top:20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align:center">
            <h4>Edit Product</h4>
        </div>
        <div class="pull-right">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="row" style="margin-top:30px; text-align:center;">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong><br>
            {{$product->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detail</strong><br>
            {{$product->detail}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image</strong><br>
            <img src="/images/{{$product->image}}" alt="" width="200px;">
        </div>
    </div>


</div>


@endsection