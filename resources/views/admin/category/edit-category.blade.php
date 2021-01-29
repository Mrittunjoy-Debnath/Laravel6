@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('update-category',['id'=>$category->id]) }}" method="post">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Edit Category</h4>

                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>

                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label" >Category Name</label>
                        <div class="col-sm-7">
                            <input type="text" name="category_name" class="form-control" placeholder="Category Name " value="{{ $category->category_name }}">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-3 text-right control-label col-form-label">Category Description</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="category_description">{{ $category->category_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label">Publication Status</label>
                        <div class="col-sm-7">
                            <input type="radio" name="publication_status" value="1" {{ $category->publication_status==1?'checked':'' }}>Publish
                            <input type="radio" name="publication_status" value="0" {{ $category->publication_status==0?'checked':'' }}>Unpublished
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
