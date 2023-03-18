<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLikesRequest;
use App\Http\Requests\UpdateLikesRequest;
use App\Http\Resources\LikeResource;
use App\Models\Likes;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $likes = Likes::all();
        return LikeResource::collection($likes);
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
    public function store(StoreLikesRequest $request)
    {
        $created = Likes::query()->create([
            'post_id'=>$request->post_id,
            'user_id'=>$request->user_id,
            'liked_date'=>Carbon::now(),

        ]);
        return new LikeResource($created);
    }

    /**
     * Display the specified resource.
     */
    public function show(Likes $likes)
    {
        return new LikeResource($likes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Likes $likes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLikesRequest $request, Likes $likes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Likes $likes)
    {
        $deleted = $likes->forceDelete();
        if (!$deleted){
            return new JsonResponse(["errors"=>[
                'could not delete that'
            ]]);
        }
        return new JsonResponse([
            "statue"=>200
        ]);
    }
}
