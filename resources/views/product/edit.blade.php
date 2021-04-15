":sqlite
@section('content')

<div class="container mt-5">
<div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;"> 
            <driv class="card-header"> 
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
            <form method="post" action="{{ route('product.update') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="IdProduct">Id Product</label>                    
                    <input type="text" name="Id_Product" class="form-control" id="Id_Product" aria-describedby="Id_Product" >                
                </div>
                <div class="form-group">
                    <label for="Name">Product Name</label>                    
                    <input type="Product_Name" name="Product_Name" class="form-control" id="Product_Name" aria-describedby="Product_Name">  
                </div>
                <div class="form-group">
                    <label for="Category">Category</label>                    
                    <input type="Category" name="Category" class="form-control" id="Category" ariadescribedby="Category"> 
                </div>
                <div class="form-group">
                    <label for="">Price</label> 
                    <input type="Price" name="Price" class="form-control" id="Price" ariadescribedby="Price">
                </div>
                <div class="form-group">
                    <label for="">Quantity</label> 
                    <input type="Quantity" name="Quantity" class="form-control" id="Quantity" ariadescribedby="Quantity">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
    </div>
@endsection 