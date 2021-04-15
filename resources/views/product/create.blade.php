@extends('product.layout')
@section('content')

<div class="container mt-5">
<div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
            Add Student
            </div>
            <div class="card-body">
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
            <form method="post" action="{{ route('product.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="IdProduct">Id Product</label>                    
                    <input type="text" name="IdProduct" class="form-control" id="IdProduct" aria-describedby="IdProduct" >                
                </div>
                <div class="form-group">
                    <label for="Product_name">Product_name</label>                    
                    <input type="Product_name" name="Product_name" class="form-control" id="Product_name" aria-describedby="Product_name">  
                </div>
                <div class="form-group">
                    <label for="Category">Category</label>                    
                    <input type="Category" name="Category" class="form-control" id="Category" ariadescribedby="Category"> 
                </div>
                <div class="form-group">
                    <label for="Price">Price</label> 
                    <input type="Price" name="Price" class="form-control" id="Price" ariadescribedby="Price">
                </div>
                <div class="form-group">
                    <label for="qty">Quantity</label> 
                    <input type="qty" name="qty" class="form-control" id="qty" ariadescribedby="qty">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
    </div>
@endsection 