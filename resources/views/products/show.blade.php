@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Product Show</h2>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="card mt-4"> <!-- Bootstrap card starts -->
                <div class="card-header">
                    <h4 class="card-title">Product Name : {{ $product->name }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>Details:</strong>
                        <p class="card-text">{{ $product->details }}</p> <!-- Product details displayed here -->
                    </div>
                </div>
            </div> <!-- Bootstrap card ends -->
        </div>
    </div>
@endsection
