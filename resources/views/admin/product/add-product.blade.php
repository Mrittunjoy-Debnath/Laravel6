@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="offset-1 col-lg-10">
        <div class="card">
                <div class="card-body">
                    @if(Session::get('message'))
                    <div class="alert alert-warning alert-dismissable fade show">
                        <h3>{{ Session::get('message') }}</h3>
                        <button type="button" class="close" data-dismiss="alert">
<span aria-hidden="true">&times; </span>
                        </button>
                </div>
                @else
                @endif

                <h4 class="card-title">Add Product</h4>

                {!! Form::open(['route'=>'new-product','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

<div class="form-group row">
    <label class="col-form-label col-md-3">Category Name</label>
    <div class="col-md-9">
        <select class="form-control" name="category_id">
            <option ">-----Category Name------</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach

            <span class="text-danger">{{ $errors->has('category-id') ? $errors->first('category-id'):'' }}</span>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-md-3">Brand Name</label>
    <div class="col-md-9">
        <select class="form-control" name="brand_id">
            <option value="">-----Brand Name------</option>
            @foreach($brands as $brand)
            <option value="$brand->id">{{ $brand->brand_name }}</option>
            @endforeach
        </select>
        <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id'):'' }}</span>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3">Product Name</label>
    <div class="col-md-9">
        <input type="text" class="form-control" name="product_name">
        <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name'):'' }}</span>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3">Product Price</label>
    <div class="col-md-9">
        <input type="text" class="form-control" name="product_price">
        <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price'):'' }}</span>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3">Product Quantity</label>
    <div class="col-md-9">
        <input type="text" class="form-control" name="product_quantity">
        <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity'):'' }}</span>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3">Product Short Description</label>
    <div class="col-md-9">
        <textarea class="form-control" name="short_desc" rows="2"></textarea>
        <span class="text-danger">{{ $errors->has('short_desc') ? $errors->first('short_desc'):'' }}</span>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3">Product Long Description</label>
    <div class="col-md-9">
        <textarea class="form-control" name="long_desc" rows="5"></textarea>
        <span class="text-danger">{{ $errors->has('long_desc') ? $errors->first('long_desc'):'' }}</span>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3">Product Image</label>
    <div class="col-md-9">
        <input type="file" name="product_image"><br>
        <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image'):'' }}</span>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-3">Publication Status</label>
    <div class="col-sm-7 radio">
        <input type="radio" name="publicaton_status" value="1">Publish
        <input type="radio" name="publicaton_status" value="0">Unpublish
        <br>
        <span class="text-danger">{{ $errors->has('publicaton_status') ? $errors->first('publicaton_status'):'' }}</span>
    </div>
</div>
</div>

<div class="border-top">
    <div class="card-body">
        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
    </div>
</div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection
