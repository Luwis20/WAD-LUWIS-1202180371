@extends('home')
@section('title', 'Data Products')
@section('content')
   <div class="container">
         @if($products->isNotEmpty())
         <a href="{{ route('product.create') }}" class="btn btn-dark">Add product!</a>
         <table class="table mt-2">
            <thead class="thead-dark">
               <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $product->name }}</td>
                  <td>${{ number_format($product->price, 2) }}</td>
                  <td>
                     <div class="btn-group">
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary mr-1">Edit</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                           @csrf
                           @method('delete')
                           <button class="btn btn-danger" onclick="return confirm('Are you sure deleting data?')">Delete</button>
                        </form>   
                     </div>
                  </td>
               </tr>
            @endforeach
         @else
            <div class="align-center" style="margin-left:520px;">
               <p><b>There is not data</b></p>
               <a href="{{ route('product.create') }}" class="btn btn-dark">Add product!</a>
            </div>
         </table>
         @endif
   </div>
@endsection