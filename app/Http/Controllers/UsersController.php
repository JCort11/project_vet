<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//: Response
    {
        $users = Users::all();
        return $users;
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
        $users = new Users;
        $users->name = $request->name;
        $users->last_name = $request->last_name;
        $users->phone_number = $request->phone_number;
        $users->address = $request->address;
        $users->date_of_birth = $request->date_of_birth;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->remember_token = $request->remember_token;
        $users->image = $request->image;

        if($users != null){
            $users->save();
            return $users;
        }else {
            return 'The users cannot be created, please fill all the blanks';
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
        $users = Users::findorFail($id);
        $users->name = $request->name;
        $users->last_name = $request->last_name;
        $users->phone_number = $request->phone_number;
        $users->address = $request->address;
        $users->date_of_birth = $request->date_of_birth;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->remember_token = $request->remember_token;
        $users->image = $request->image;

        $users->save();
        return 'The user has been updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        Users::destroy($id);
        return 'The user has been deleted successfully';
    }
}
