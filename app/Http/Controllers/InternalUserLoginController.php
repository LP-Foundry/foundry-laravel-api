<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternalUser;

class InternalUserLoginController extends Controller
{
    /**
     * ...
     */
    public function login(Request $request)
    {
        return $request;
    }

    /**
     * Display a listing of the resource.
     * 
     * @return  \Illuminate\Http\Response
     * /
    public function index()
    {
        // get all internal users
        return InternalUser::all();
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param   \Illuminate\Http\Request    $request
     * @return  \Illuminate\Http\Response
     * /
    public function store(Request $request)
    {
        // create an internal user
        return InternalUser::create($request->all());
    }

    /**
     * Display the specified resource.
     * 
     * @param   int $id
     * @return  \Illuminate\Http\Response
     * /
    public function show($id)
    {
        // show an internal user
        return InternalUser::find($id);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param   \Illuminate\Http\Request    $request
     * @param   int                         $id
     * @return  \Illuminate\Http\Response
     * /
    public function update(Request $request, $id)
    {
        // update an internal user
        $user = InternalUser::find($id);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param   int $id
     * @return  \Illuminate\Http\Response
     * /
    public function destroy($id)
    {
        // delete an internal user
        return InternalUser::destroy($id);
    }
    */
}
