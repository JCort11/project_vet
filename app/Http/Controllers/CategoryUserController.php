<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category_user;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//: Response
    {
        $category = Category_user::all();
        return $category;
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
        $category = new Category_user;
        $category->category_id = $request->category_id;
        $category->user_id = $request->user_id;

        if($category != null){
            $category->save();
            return $category;
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
        $category = Category_user::findorFail($id);
        $category->category_id = $request->category_id;
        $category->user_id = $request->user_id;

        $category->save();
        return "The Category has been updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        Category_user::destroy($id);
        return 'The category has been deleted successfully';
    }
}
