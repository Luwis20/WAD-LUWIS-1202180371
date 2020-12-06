@extends('home')
@section('title', 'Detail Products')
@section('content')
   <div class="container">
      <center><h2>Order</h2></center>
      <br><br>
      <div class="row">
         <div class="col-sm-1"></div>
         <div class="col-lg-10">
            <div class="row">
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-7">
                           <img src="{{ $product->getImage() }}" width="500px" alt="">
                        </div>
                        <div class="col-sm-5">
                           <h2>{{ $product->name }}</h2>
                           <p class="card-text">{{ $product->description }}</p>
                           <p class="card-text">Stock : {{ $product->stock }}</p>

                           <p style="font-size:20px;font-weight:bold;">${{ number_format($product->price, 2) }}</p>
                        </div>
                        <div class="col-sm-2">
                           
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           @if(session('messageAmount'))
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                 <strong>Attention!</strong> {{ session('messageAmount') }}.
                              </div>
                           @endif
                           
                           <form action="{{ route('order.store') }}" method="post">
                           @csrf
                           <input type="hidden" name="product_id" value="{{ $product->id }}">
                              <label for="">Name</label>
                              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name order ..." id="">
                              @error('name')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                              <label for="">Contact</label>
                              <input type="number" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}" placeholder="Contact ..." id="">
                              @error('contact')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                              <label for="">Quantity</label>
                              <input type="number" name="amount" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') }}" placeholder="Amount ...">
                              @error('amount')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                              @enderror
                              <button class="btn btn-success mt-3">Submit</button>
                           </form>
                        </div>
                     </div>
               </div>
            </div>
         </div>
         <div class="col-sm-1"></div>
      </div>
   </div>
@endsection