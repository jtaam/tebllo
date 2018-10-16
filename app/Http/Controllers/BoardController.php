<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Board::all();
    }

    public function show($boardId)
    {
        $board = Board::findOrFail($boardId);
        return $board;
    }

    public function store(Request $request)
    {
        $board = new Board();
        $board->user_id = $request->user_id;
        $board->name = $request->name;
        $board->save();

        return response()->json(['message' => 'success'], 200);
    }
}
