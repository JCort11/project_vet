<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//: Response
    {
        $categories = Categories::all();
        return $categories;
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
        $categories = new Categories;
        $categories->type = $request->type;

        if($categories != null){
            $categories->save();
            return $categories;
        }else {
            return 'The category cannot be created, please fill all the blanks';
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
        $categories = Categories::findorFail($id);
        $categories->type = $request->type;

        $categories->save();
        return 'The category has been updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        Categories::destroy($id);
        return 'The category has been deleted successfully';
    }
}
