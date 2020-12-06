@extends('home')
@section('title', 'Data History')
@section('content')
   <div class="container">
      <div class="row">
         @if($histories->isNotEmpty())
            <table class="table mt-2">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">No</th>
                     <th scope="col">Product</th>
                     <th scope="col">Buyer name</th>
                     <th scope="col">Contact</th>
                     <th scope="col">Amount</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($histories as $history)
                     <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $history->product->name }}</td>
                        <td>{{ $history->name }}</td>
                        <td>{{ $history->contact }}</td>
                        <td>${{ number_format($history->product->price*$history->amount, 2) }}</td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @else
            <div class="align-center" style="margin-left:520px;">
               <p><b>There is not data</b></p>
               <a href="{{ route('order.index') }}" class="btn btn-dark">Order Now</a>
            </div>
         @endif
      </div>
   </div>
@endsection