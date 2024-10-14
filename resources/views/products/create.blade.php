@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Add New Product</h2>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" class="form" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Name :</strong>
                    <input type="text" name="name" id="nameID" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Details :</strong>
                    <textarea name="details" id="detailsID" class="form-control" style="height: 150px" placeholder="Details"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 mt-3">
                <button class="btn btn-success">Submit</button>
            </div>  
        </div>
    </form>
@endsection
