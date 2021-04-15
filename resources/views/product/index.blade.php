@extends('product.layout')
    @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>PRODUCT VIEW</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Input Product Data</a>
            </div>
            
           
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>      
            <th width="280px">Action</th>
        </tr>
            @foreach ($product as $prd)
                <tr>
                    <td>{{ $prd ->product_name }}</td>
                    <td>{{ $prd ->category }}</td>
                    <td>{{ $prd ->price }}</td>
                    <td>{{ $prd ->qty }}</td>
                    <td>
                        <form action="{{ route('product.destroy',['product'=>$prd->id_product]) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('product.show',$prd->id_product) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('product.edit',$prd->id_product) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>

    {{ $product->links() }}
@endsection