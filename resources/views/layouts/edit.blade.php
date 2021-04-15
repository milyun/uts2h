@ehttps://prod.liveshare.vsengsaas.visualstudio.com/join?7F0F7A7B56EE97DB34C9FCC68BAC12CA46E3xtends('layout')
@section('content')

<div class="container">
<div class='row justify-contect-center>
<div class="card">
<div class="card-header">
Edit Student Data
</div>
<div class="card-body">
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
				<form method >
                @csrf
@method('PUT')
<div class="form-group">
<label for="Id_product"></label>
<input type="text" name="Id_product" class="form-control" id="Id_product" value="{{ $Product->Id_product }}" ariadescribedby="Id_product" >
</div>
<div class="form-group">
<label for="Product_name">Product_name</label>
<input type="text" name="Product_name" class="form-control" id="Product_name" value="{{ $Product->Product_name }}" aria-describedby="Product_name" >
</div>
<div class="form-group">
<label for="category">Category</label>
<input type="text" name="category" class="form-control" id="category" value="{{ $Product->category }}" aria-describedby="category" >
</div>
<div class="form-group">
<label for="Price">Price</label>
<input type="int" name="Price" class="form-control" id="Price" value="{{ $Product->Price }}" aria-describedby="Price" >
</div>
<div class="form-group">
<label for="Quantity">Quantity</label>
<input type="text" name="Quantity" class="form-control" id="Quantity" value="{{ $Student->address }}" ariadescribedby="Address" >
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection
