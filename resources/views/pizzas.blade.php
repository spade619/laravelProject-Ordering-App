
@extends('layouts.layout')

@section('content')  
        <div class="text-center position-ref full-height">
            <div class="content">
                <div> 
                     Pizza List
                </div>
          
              
              
                @foreach($pizzas as $pizza)
                <p class="text-success">the base is {{$pizza->name}}</p>
                    <p class="text-danger">the type of this pizza is {{ $pizza->type}}</p>
                    <p class="text-warning">the base is {{$pizza->base}}</p>
                    <p> <strong>the price is {{ $pizza->price}}</strong></p>
                   
                    <br>
                    <br>
                @endforeach
            
            </div>

          
        </div>
        @endsection
 