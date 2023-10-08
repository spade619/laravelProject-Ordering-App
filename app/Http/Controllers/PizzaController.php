<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust','price' => 10],
            ['type' => 'mexican', 'base' => 'crispy crust','price' => 30],
            ['type' => 'american', 'base' => 'flat crust','price' => 25],
            ['type' => 'italian', 'base' => 'beefy crust','price' => 10],
            ['type' => 'pinoy', 'base' => 'normal crust','price' => 50]
           ];
        
               
        
            return view('pizzas', [
                'pizzas' => $pizzas,
                'name' => request('name'),
                'age' => request('age')
            ]);
    }


    //2nd route handled by controller
    public function show($id){
        return view('details', ['id' => $id]);
    }
}
