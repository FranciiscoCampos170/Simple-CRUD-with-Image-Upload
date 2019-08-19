@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
            <div class="float-left">
              <h3 class="text-center">Simple CRUD with Image Upload</h3>
            </div>
            <div class="float-right">
              <a href="{{ route('product-index') }}" class="btn btn-dark">Back</a>
            </div>
            <div>
              
            </div>
            
        </div>
       
       <div class="card-body">
         <div class="col-md-12">
           <img src="{{ URL::to('/') }}/images/{{ $product->image }}" alt="" class="img-fluid">
         </div>
         <div class="col-md-12">
           <b>Product Name:</b>
           <br>
           {{ $product->name }}
         </div>
         <div class="col-md-12">
           <b>Description</b>
           {{ $product->description }}
         </div>
        
    </div>
  </div>
</div>
@endsection