@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>All Records</h2>
                <a href="{{ route('products.create') }}" class="btn btn-success">
                    Create Product
                </a>
            </div>
        </div>
    </div>
    @if ($message = session('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->details }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">
                        View
                    </a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">
                        Edit
                    </a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-end">
        {!! $products->links() !!}
    </div>    
@endsection
