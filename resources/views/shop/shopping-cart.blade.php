@extends('layouts.master')

@section('content')
<h1>Shopping Cart</h1>
  @if(Session::has('cart'))
  <div class="row">
  <div class="col-sm-6 col-md-4">
  <ul class="list-group">
  @foreach($products as $product)
  <li class="list-group-item">
  <span class="badge">{{ $product['qty'] }}</span>
  <strong>{{ $product['item']['title'] }}</strong>
  <span class="label label-success">{{ $product['price'] }}</span>
  </li>
  @endforeach
  
  </ul>
  </div>
  </div>
  @else
  @endif
 
@endsection