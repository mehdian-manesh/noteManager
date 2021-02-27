<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the tags.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = request()->user();
        if( !$user->tokenCan('read'))
            return response()->json(['msg' => 'The user not authorized'], 401);

        return response()->json($user->tags()->paginate(5), 200);
    }

    /**
     * Store a newly created tag in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();
        if( !$user->tokenCan('create'))
            return response()->json(['msg' => 'The user not authorized'], 401);

        $validatedData = $request->validate([
            'name' => 'required'
            ]);

        $validatedData['user_id'] = $user->id;

        $tag = Tag::create($validatedData);

        return response()->json($tag, 201);

    }

    /**
     * Display the specified tag.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $user = request()->user();
        if( $tag->user_id !== $user->id  || !$user->tokenCan('read'))
            return response()->json(['msg' => 'The user not authorized'], 401);

        $data = Tag::with('notes')->findOrFail($tag->id);
        return response()->json($data, 200);
    }

    /**
     * Update the specified tag in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified tag from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
