<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prevision;
class PrevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $previsao = Prevision::all();
       return response()->json($previsao);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Prevision::create([
        'descricao'=> $request -> input('descricao'),
        'data_previsao'=> $request -> input('data_previsao'),
        'cidade'=> $request -> input('cidade')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return  Prevision::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
