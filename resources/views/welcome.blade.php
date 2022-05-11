@extends('layouts.layout')
    
@section('cont')


           
<div class="content">
    
    <img src="/css/img/pizza-house.png" alt="Pizza House Logo">

                <div class="title m-b-md">
            The North's Best Pizza
                </div>
<a href="/pizzas/create"> Order a Pizza</a>
<p class="mssg"> {{ session('mssg')}} </p>         
</div>

        </div>
        
@endsection
