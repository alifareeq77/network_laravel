<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all();
        return UserResource::collection($user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $client)
    {
        return new UserResource($client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( User $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $client)
    {
        //
    }
}
