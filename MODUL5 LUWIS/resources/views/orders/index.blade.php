@extends('home')
@section('title', 'Data Products')
@section('content')
   <div class="container">
      <center>
         <h2>Order</h2>
         <br>
      </center>
      <div class="card-group">
         <div class="row">
            @forelse($products as $product)
               <div class="col-sm-4">
                  <div class="card ml-3 mb-2">
                     <img class="card-img-top" src="{{ $product->getImage() }}" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 120) }}</p>
                        <p style="font-size:35px;">${{ number_format($product->price, 2) }}</p>
                        <a href="{{ route('order.show', $product->id) }}" class="btn btn-success mt-1">Order now</a>
                     </div>
                  </div>
               </div>
            @empty
               <tr>
                  <div class="align-center" style="margin-left:510px;">
                     <p><b>There is not data</b></p>
                     <a href="{{ route('product.create') }}" class="btn btn-dark">Add product!</a>
                  </div>
               </tr>
            @endforelse
         </div>
      </div>
      <hr>
   </div>
@endsection