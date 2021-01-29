@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if(Session::get('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h3>{{ Session::get('message') }}</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @else
                  @endif
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($categories as $category)


                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>{{ $category->publication_status ==1 ? 'Published': 'Unpublished' }}</td>
                                <td>
                                    @if($category->publication_status ==1 )
                                    <a href="{{ route('unpublished-category',['id'=>$category->id]) }}" class="btn btn-primary">
                                        <span><i class="fa fa-arrow-up"></i></span>
                                    </a>
                                    @else
                                    <a href="{{ route('published-category',['id'=>$category->id]) }}" class="btn btn-warning">
                                        <span><i class="fa fa-arrow-down"></i></span>
                                    </a>
                                    @endif
                                    <a href="{{ route('edit-category',['id'=>$category->id] )}}" class="btn btn-success">
                                        <span><i class="fa fa-edit"></i></span>
                                    </a>
                                    <a href="{{ route('delete-category',['id'=>$category->id]) }}" class="btn btn-primary">
                                        <span><i class="fa fa-trash"></i></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL No.</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
