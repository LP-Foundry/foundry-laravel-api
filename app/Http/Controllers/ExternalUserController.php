<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExternalUser;

class ExternalUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        // get all external users
        return ExternalUser::all();
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param   \Illuminate\Http\Request    $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create an external user
        return ExternalUser::create($request->all());
    }

    /**
     * Display the specified resource.
     * 
     * @param   int $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show an external user
        return ExternalUser::find($id);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param   \Illuminate\Http\Request    $request
     * @param   int                         $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update an external user
        $user = ExternalUser::find($id);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param   int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete an external user
        return ExternalUser::destroy($id);
    }
}
