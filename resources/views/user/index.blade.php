@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h1>Users List</h1>
    @foreach($users as $user)
    {{ $user->id }} => {{ $user->email }}
    <br>
    @endforeach
</div>
</div>
@endsection