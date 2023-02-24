<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Services;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//: Response
    {
        $service = Services::all();
        return $service;
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
        $service = new Services;
        $service->user_id=$request->user_id;
        $service->pet_id=$request->pet_id;
        $service->service_name=$request->service_name;
        $service->service_price=$request->service_price;
        $service->additional_comments=$request->additional_comments;

        if($service !=null){
            $service->save();
            print 'The service has been created successfully';
            return $service;
        } else{
            return 'The service cannot be created, please fill all the blanks';
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
        $service = Services::findorFail($id);
        $service->user_id=$request->user_id;
        $service->pet_id=$request->pet_id;
        $service->service_name=$request->service_name;
        $service->service_price=$request->service_price;
        $service->additional_comments=$request->additional_comments;

        $service->save();
        return 'The service has been updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        Services::destroy($id);
        return 'The service has been deleted successfully';
    }
}
