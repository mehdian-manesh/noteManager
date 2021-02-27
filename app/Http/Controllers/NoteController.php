<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the notes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Note::paginate(5), 200);
    }

    /**
     * Store a newly created note in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoteRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        if (empty($validated['user_id'])) $validated['user_id'] = auth()->user()->id;

        $note = Note::create($validated);
        return response()->json($note, 201);
    }

    /**
     * Display the specified note.
     *
     * @param  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        $user = request()->user();
        if( $note->user_id !== $user->id  || !$user->tokenCan('read'))
            return response()->json([
                'msg' => 'The user not authorized',
            ], 401);

        $data = Note::with(['category','tags'])->findOrFail($note->id);
        return response()->json($data, 200);
    }

    /**
     * Update the specified note in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        $note->update($request->validated());
        return response()->json(null, 200);
    }

    /**
     * Remove the specified note from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $user = request()->user();
        if( $note->user_id !== $user->id  || !$user->tokenCan('delete'))
            return response()->json([
                'msg' => 'The user not authorized',
            ], 401);

        $note->delete();

        return response()->json( null, 204);
    }
}
