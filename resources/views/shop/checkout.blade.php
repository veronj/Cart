@extends('layouts.master')

@section('content')
<h1>Checkout</h1>
  
  <div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
  <h4>Your total: {{ $total }}</h4>
  <form action="{{ route('checkout') }}" method="post">
  
  </form>
  </div>
  </div>

  @else
  @endif
 
@endsection