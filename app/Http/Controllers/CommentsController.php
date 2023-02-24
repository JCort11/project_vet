<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Comments;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//: Response
    {
        $comments = Comments::all();
        return $comments;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()//: Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//: RedirectResponse
    {
        $comments = new Comments;
        $comments->text = $request->text;
        $comments->pet_id = $request->pet_id;
        $comments->user_id = $request->user_id;

        if($comments != null){
            $comments->save();
            return $comments;
        }else {
            return 'The comment cannot be created, please fill all the blanks';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)//: Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//: Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//: RedirectResponse
    {
        $comments = Comments::findorFail($id);
        $comments->text = $request->text;
        $comments->pet_id = $request->pet_id;
        $comments->user_id = $request->user_id;

        $comments->save();
        return 'The comment has been updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        Comments::destroy($id);
        return 'The comment has been deleted successfully';
    }
}
