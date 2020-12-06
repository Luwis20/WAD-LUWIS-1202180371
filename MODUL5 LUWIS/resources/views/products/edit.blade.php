@extends('home')
@section('title', 'Edit Products')
@section('content')
   <div class="container">
      <center>
         <h2>Update Product</h2>
      </center>
      <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
         @csrf
         @method('put')
         <div class="form-group">
            <label for="Name">Product name</label>
            <input type="text" name="name" value="{{ $product->name }}" placeholder="Product name ..." class="form-control @error('name') is-invalid @enderror" autofocus>
            @error('name')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror

            <label for="">Price</label>
            <div class="input-group mb-2 mr-sm-2">
               <div class="input-group-prepend">
                  <div class="input-group-text">$ USD</div>
               </div>
               <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" placeholder="Price ...">
            </div>
            @error('price')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror

            <label for="Name">Description</label>
            <textarea name="description" placeholder="Description ..." class="form-control @error('description') is-invalid @enderror" cols="3" rows="3">{{ $product->description }}</textarea>
            @error('description')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror

            <label for="Name">Stok</label>
            <input type="number" name="stock" value="{{ $product->stock }}" placeholder="Stock ..." class="form-control @error('stock') is-invalid @enderror">
            @error('stock')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror

            <label for="Name">Image</label>
            <br>
            <input type="file" name="img_path" placeholder="File ..." @error('img_path') is-invalid @enderror">
            @error('img_path')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
            <br>
            <button class="btn btn-dark mt-2">Submit</button>
         </div>
      </form>
   </div>
@endsection