<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        /**
     * Validates account data
     */
    public function validateAccount(Request $request) {
        //print($request);
        //Validation of all fields
        $validator = Validator::make($request->all(), [
            'photo' => 'required',
            'name' => 'required',
            'first_last_name' => 'required',
            'second_last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => $validator->errors(),
        ], 401);
        }

        // Response
        return response()->json([
            'success' => true,
        ]);
    }

    public function validatePersonal(Request $request) {
        //Validation of all fields
        $validator = Validator::make($request->all(), [
            'birthdate' => 'required',
            'home_address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'id_num' => 'required',
            'id_type' => 'required',
        ]);
        if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => $validator->errors(),
        ], 401);
        }

        // Response
        return response()->json([
            'success' => true,
        ]);
    }

    public function validateProfessional(Request $request) {
        //Validation of all fields
        $validator = Validator::make($request->all(), [
            'profession' => 'required',
            'experience' => 'required',
            'work_address' => 'required',
            //'location' => 'required',
        ]);
        if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => $validator->errors(),
        ], 401);
        }

        // Response
        return response()->json([
            'success' => true,
        ]);
    }

    public function validateService(Request $request) {
        //Validation of all fields
        $validator = Validator::make($request->all(), [
            'service' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => $validator->errors(),
        ], 401);
        }

        // Response
        return response()->json([
            'success' => true,
        ]);
    }
}
