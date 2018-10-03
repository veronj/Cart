@extends('layouts.master')

@section('content')
<h1>Checkout</h1>
  
<div class="row">
<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
<h4>Your total: {{ $total }}</h4>
<form action="{{ route('checkout') }}" method="post">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="card-name">Card Holder Name</label>
                <input type="text" id="card-name" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="card-number">Credit Card Number</label>
                <input type="text" id="card-number" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="card-expiry-month">Expiration month</label>
                <input type="text" id="card-expiry-month" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="card-expiry-year">Expiration year</label>
                <input type="text" id="card-expiry-year" class="form-control" required>
            </div>
        </div>
    </div>    
</form>
</div>
</div>

@endsection