<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corral;

class ApiCorralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corral = Corral::all();
        return $corral;
    }

        /**


     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $corral = Corral::create($request->all());
        return $corral;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCorral(Request $request)
    {
        $corral = Corral::where('id','=', $request['id'])->get();
        return $corral;
        
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
