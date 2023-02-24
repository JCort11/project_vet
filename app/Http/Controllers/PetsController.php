<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//: Response
    {
        $pets = Pets::all();
        return $pets;
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
        $pets = new Pets;
        $pets->name = $request->name;
        $pets->gender = $request->gender;
        $pets->type = $request->type;
        $pets->size = $request->size;
        $pets->description = $request->description;
        $pets->date_of_birth = $request->date_of_birth;
        $pets->user_id = $request->user_id;
        $pets->image = $request->image;

        if($pets != null){
            $pets->save();
            return $pets;
        }else {
            return 'The pet profile cannot be created, please fill all the blanks';
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
        $pets = Pets::findorFail($id);
        $pets->name = $request->name;
        $pets->gender = $request->gender;
        $pets->type = $request->type;
        $pets->size = $request->size;
        $pets->description = $request->description;
        $pets->date_of_birth = $request->date_of_birth;
        $pets->user_id = $request->user_id;
        $pets->image = $request->image;

        $pets->save();
        return "The pet profile has been updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        Pets::destroy($id);
        return 'The pet profile has been deleted successfully';
    }
}
