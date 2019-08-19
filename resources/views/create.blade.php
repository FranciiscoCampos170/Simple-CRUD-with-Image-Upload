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
         @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                          <li>
                            {{ $error }}  
                          </li>                       
                    @endforeach
                  </ul>
                </div>
            @endif
          <form action="{{ route('product-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">
                Product Name
              </label>
              <input type="text" name="name" class="form-control input-lg">
            </div>

            <div class="form-group">
              <label for="">
                Description
              </label>
              <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="">
                Select Product Image
              </label>
              <input type="file" name="image" class="form-control">
            </div>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Add">
          </div>
        </div>
      </form>
        
    </div>
  </div>
</div>
@endsection