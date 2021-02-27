<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = request()->user();
        if( !$user->tokenCan('read'))
            return response()->json(['msg' => 'The user not authorized'], 401);

        return response()->json($user->categories()->paginate(5), 200);
    }

    /**
     * Store a newly created category in storage.
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
            'name' => 'required|max:100'
            ]);

        $validatedData['user_id'] = $user->id;

        $category = Category::create($validatedData);

        return response()->json($category, 201);
    }

    /**
     * Display the specified category.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $user = request()->user();
        if( $category->user_id !== $user->id  || !$user->tokenCan('read'))
            return response()->json(['msg' => 'The user not authorized'], 401);

        $data = Category::with('notes')->findOrFail($category->id);
        return response()->json($data, 200);
    }

    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $user = $request->user();
        if( !$user->tokenCan('update'))
            return response()->json(['msg' => 'The user not authorized'], 401);

        $validatedData = $request->validate([
            'name' => 'required|max:100'
            ]);

        $category->update($validatedData);

        return response()->json(null, 200);
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
