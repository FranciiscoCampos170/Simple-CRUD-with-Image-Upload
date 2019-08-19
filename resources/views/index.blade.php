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
              <a href="{{ route('product-create') }}" class="btn btn-primary">Add</a>
            </div>
            
        </div>
       
       <div class="card-body">
         @if ($message = Session::get('success'))
                <div class="alert alert-success">
                  <p>{{ $message }}</p>
                </div>
            @endif
        <table class="table table-bordered text-center">
          <tr>
            <th width="10%">Image</th>
            <th width="25%">Product Name</th>
            <th width="25%">Description</th>
            <th width="50%" colspan="3">Action</th>
          </tr>

          @forelse ($products as $product)
              <tr>
                <td>
                  <img src="{{ URL::to('/') }}/images/{{ $product->image }}" class="img-fluid">
                </td>
                <td>
                  {{ $product->name }}
                </td>
                <td>
                  {{ $product->description }}
                </td>
                <form action="{{ route('product-destroy', $product->id) }}" method="POST">
                  <td>
                    <a href="{{ route('product-show', $product->id) }}" class="btn btn-primary">Show</a>
                  </td>
                  <td>
                    <a href="{{ route('product-edit', $product->id) }}" class="btn btn-success">Edit</a>
                  </td>
                  <td>
                   @csrf
                   @method('DELETE')
                  <input type="submit" name="" id="" value="Delete" class="btn btn-danger">
                  </td>
                </form>
                </tr>
          @empty
              <h3>No Have Data to Show</h3>
          @endforelse
        </table>
      </div>
      <div class="card-footer d-flex justify-content-center">
        {!! $products->links() !!}
      </div>
      </div>
        
    </div>
  </div>
</div>
@endsection