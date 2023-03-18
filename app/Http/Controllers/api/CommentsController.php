<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentsRequest;
use App\Http\Requests\UpdateCommentsRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PostResource;
use App\Models\Comments;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $comments = Comments::all();
         return CommentResource::collection($comments);
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
    public function store(StoreCommentsRequest $request)
    {
        $created = Comments::query()->create([
            'comment'=>$request->description,
            'user_id'=>$request->user_id,
            'post_id'=>$request->post_id,
            'commented_date'=>Carbon::now(),

        ]);
        return new PostResource($created);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        return $comments;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentsRequest $request, Comments $comments)
    {
        $comments->update($request->only(["comment"]));
        return new CommentResource($comments);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        $deleted = $comments->forceDelete();
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
