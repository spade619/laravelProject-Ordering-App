
@extends('layouts.layout')

@section('content') 
<a href="/pizzas" class="ms-3"> <- Back to Pizzas Page</a> 
    <div class="container text-center">
            <h3 class = "text-danger">Order for {{$pizza -> name}}</h3>
            <h5 class ="primary">base is {{$pizza -> base}}</h5>
            <p>pizza type - {{$pizza -> type}}</p>
            <p>ordered on - {{$pizza -> created_at}}</p>
    </div>
   
        @endsection
 