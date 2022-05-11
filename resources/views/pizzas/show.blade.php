@extends('layouts.layout')

@section('cont')
<div class="wrapper.pizza-details">
<h1> Order for {{ $pizzas->name }} </h1>
<p class="type">Type - {{ $pizzas->type }} </p>
<p class="base">Base - {{ $pizzas->base }} </p>
<p class="toppings">Extra Toppings:</p>
<ul>
    @foreach($pizzas->toppings as $topping)
    <li>{{ $topping }}</li>
    @endforeach
</ul>
<form action="/pizzas/{{ $pizzas->id }}" method="POST">
@csrf
@method('DELETE')
<button>Complete Order</button>
</form>
</div>
<a href="/pizzas" class ="back"><- Back to all Pizzas</a>
@endsection

