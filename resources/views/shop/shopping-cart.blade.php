@extends('layouts.master')

@section('content')
<h1>Shopping Cart</h1>
  @if(Session::has('cart'))
  <div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
  <ul class="list-group">
  @foreach($products as $product)
  <li class="list-group-item">
  <span class="badge">{{ $product['qty'] }}</span>
  <strong>{{ $product['item']['title'] }}</strong>
  <span class="label label-success">{{ $product['price'] }} €</span>
  <div class="btn-group">
  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
  <ul class="dropdown-menu">
  <li><a href="#">Suppr 1</a></li>
  <li><a href="#">Suppr all</a></li>
  </ul>
  </div>
  </li>
  @endforeach
  
  </ul>
  </div>
  </div>

  <div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
  <strong>Total : {{ $totalPrice }}</strong>
  </div>
  </div>
<hr>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
  <a href="{{ route('product.checkout') }}" type="button" class="btn btn-success">Check Out</a>
  </div>
  </div>

  @else
  @endif
 
@endsection