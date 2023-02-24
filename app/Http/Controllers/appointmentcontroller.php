<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Appointmentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//: Response
    {
        $appointment = Appointment::all();
        return $appointment;
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
        $appointment = new Appointment;
        $appointment->pet_name = $request->pet_name;
        $appointment->species = $request->species;
        $appointment->breed = $request->breed;
        $appointment->age = $request->age;
        $appointment->date = $request->date;
        $appointment->service = $request->service;

        if($appointment != null){
            $appointment->save();
            return $appointment;
        }else {
            return 'The appointment cannot be created, please fill all the blanks';
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
        $appointment = Appointment::findorFail($id);
        $appointment->pet_name = $request->pet_name;
        $appointment->species = $request->species;
        $appointment->breed = $request->breed;
        $appointment->age = $request->age;
        $appointment->date = $request->date;
        $appointment->service = $request->service;

        $appointment->save();
        return 'The appointment has been updatated successfully';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        Appointment::destroy($id);
        return 'The appointment has been deleted successfully';
    }
}
