
@extends('layouts.layout')

@section('content')  
        <div class="text-center position-ref full-height">
            <div class="content">
                <div> 
                     Pizza List
                </div>
          
              
                <p>{{$name}}</p>
                <h2>{{$age}}</h2>
                @foreach($pizzas as $pizza)
                <p>menu {{$loop ->index}}</p>
                    <p class="text-danger">the type of this pizza is {{ $pizza ['type']}}</p>
                    <p class="text-warning">the base is {{ $pizza['base']}}</p>
                    <p> <strong>the price is {{ $pizza['price']}}</strong></p>
                   
                    <br>
                    <br>
                @endforeach
            
            </div>

          
        </div>
        @endsection
 