<?php

namespace App\Http\Controllers;

use App\Models\Room_name;
use Illuminate\Http\Request;

class RoomnameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = Room_name::all();
        return view('roomnames.index', compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $room = Room_name::all();
        return view('roomnames.create', compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['roomname' => 'required|max:255']
        );
        Room_name::create($request->except("_token"));
        return redirect()->route('roomnames.create')
            ->with('success', 'Room name created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room_name::find($id);
        return view('roomnames.show', compact('roomnames'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $romm = Room_name::find($id);
        return view('roomnames.edit', compact('roomnames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            ['roomname' => 'required|max:255']
        );
        $room = Room_name::find($id);
        $room->update($request->all())
            ->with('success', 'Room name updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        // $room = Room_name::find($id);
        // $room->delete();
        // return redirect()->back();
        $room = Room_name::find($id);

        if ($room) {
            $room->delete();
            return redirect()->back();
        } else {
            // Handle the case where the room with the given $id was not found.
            // You may want to redirect to an error page or perform some other action.
            return redirect()->back()->with('error', 'Room not found');
        };
    }
}