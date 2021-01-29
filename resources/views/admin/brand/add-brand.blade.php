@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
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

                <h4 class="card-title">Add Brand</h4>

                {!! Form::open(['route'=>'new-brand', 'method'=>'post','class'=>'form-horizontal']) !!}

                <div class="form-group row">
                    {{ Form::label('brand_name','Brand name',['class'=>'col-sm-3 text-right control-label col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::text('brand_name','',['class'=>'form-control','placeholder'=>'Brand Name']) }}
                        <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name'):'' }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('brand_description','Brand Description',['class'=>'col-sm-3 text-right control-label col-form-label']) }}
                    <div class="col-sm-7">
                        {{ Form::textarea('brand_description','',['class'=>'form-control','placeholder'=>'Brand description','rows'=>'4']) }}
                        <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description'):'' }}</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label">Publication Status</label>
                    <div class="col-sm-7">
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
