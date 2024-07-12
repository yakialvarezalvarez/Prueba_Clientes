<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Http\Requests\StoreTokenRequest;
use App\Http\Requests\UpdateTokenRequest;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreTokenRequest $request)
    {
        $token = new Token;
        $token->token = $request->input('token');
        $token->save();
        return response()->json(['message' => 'Token guardado con éxito'], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTokenRequest $request)
    {
        // Crear y guardar el token
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Token $token)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Token $token)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTokenRequest $request, Token $token)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Token $token)
    {
        //
    }
}
