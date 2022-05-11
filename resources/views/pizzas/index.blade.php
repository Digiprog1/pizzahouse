@extends('layouts.layout')

@section('cont')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/css/img/pizza.png" alt="Pizza Icon">
   <h4><a href="/pizzas/ {{ $pizza->id }} ">{{ $pizza ->name }}</a></h4> 
    
    </div>
    @endforeach
    
</div>  
@endsection

