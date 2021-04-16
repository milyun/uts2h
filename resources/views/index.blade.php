@extends('layout.main')

@section('title', 'Product Data')

@section('content')


<div class="container">
    <div class="jumbotron">

        @if(session('msg'))

        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">

            {{session('msg')}}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

@endif
    <h1 class="display-6">Product Data</h1>
    <hr class="my-4">     
    <a href="anggota/create" class="btn btn-primary mb-1"> Tambah Product</a>       
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID Product</th>
            <th scope="col">Product</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th></th>
        </tr>
        </thead>
    </table>

@foreach ($product_name as $product)

    </div>
</div>
