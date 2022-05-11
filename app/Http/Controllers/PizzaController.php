<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
class PizzaController extends Controller
{
    public function index() {

    //   $pizzas = Pizza::all();
       // $pizzas =Pizza::orderBy('name', 'desc')->get();
       // $pizzas = Pizza::where('type', 'hawaiian')->get();
       $pizzas = Pizza::latest()->get();
       return view('pizzas.index', [

            'pizzas' => $pizzas
        ]);
    }

    public function show($id) {
        
        $pizzas=Pizza::findorfail($id);
        
        return view('pizzas.show', ['pizzas' => $pizzas]);
    }
    public function create() {
        return view('pizzas.create');
    }
    public function store() {

        $pizzas = new Pizza();

        $pizzas->name = request('name');
        $pizzas->type = request('type');
        $pizzas->base = request('base');
        $pizzas->toppings = request('toppings');


        $pizzas->save();

        return redirect('/')->with('mssg','Thanks For Your Order');
    }  
    public function destroy ($id) {

        $pizzas = Pizza::findorfail($id);
        $pizzas -> delete();

        return redirect('/pizzas');
        }
    

}