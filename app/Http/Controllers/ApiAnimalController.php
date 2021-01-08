<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class ApiAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * Funcion que me permite obtener todas las entidades de la tabla animales
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $animales = Animal::all();
        return $animales;
    }

    /**
     * Show the form for creating a new resource.
     *Funcion que me permite crear entidades en la tabla animales
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        return $animal;
    }

    /**
     * Display the specified resource.
     *Funcion que me permite obtener una entidad por su id de la tabla animales
     * @return \Illuminate\Http\Response
     */
    public function showAnimalCorral(Request $request)
    {
        $animals = Animal::where('corral_id','=', $request['id'])->get();
        return $animals;
    }

    /**
     * Display the specified resource.
     *Funcion que me permite obtener el promedio de edad de los animales de determinado corral
     * @return \Illuminate\Http\Response
     */
    public function averageAge(Request $request)
    {
        $sum = 0;
        $quanty = 0;
        $animals = Animal::where('corral_id','=', $request['id'])->get();
        foreach ($animals as &$animal) {
            $sum = ($animal['age']*$animal['quantity']) + $sum;
            $quanty = $animal['quantity'] + $quanty;
        }
        if($quanty == 0){
            $average = 0;
        }
        else{
        $average = $sum / $quanty ;
        }
        return $average;
    }

    /**
     * Display the specified resource.
     *Funcion que me permite obtener la suma de todos los animales de un determinado corral
     * @return \Illuminate\Http\Response
     */
    public function quantityAnimalCorral(Request $request)
    {
        $sum = 0;
        $animals = Animal::where('corral_id','=', $request['id'])->get();

        foreach ($animals as &$animal) {
            $sum = $animal['quantity'] + $sum;
        }
        return $sum;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
