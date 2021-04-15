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
            <form method="post" action="{{ route('product.store') }}" id="myForm">
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
                    <label for="Class">Category</label>                    
                    <input type="Class" name="Class" class="form-control" id="Class" ariadescribedby="Class"> 
                </div>
                <div class="form-group">
                    <label for="Major">Major</label> 
                    <input type="Major" name="Major" class="form-control" id="Major" ariadescribedby="Major">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
    </div>
@endsection 