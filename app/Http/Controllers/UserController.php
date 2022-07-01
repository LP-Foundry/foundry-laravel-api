<?php

namespace App\Http\Controllers;

#use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
#use Illuminate\Foundation\Bus\DispatchesJobs;
#use Illuminate\Foundation\Validation\ValidatesRequests;
#use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    #use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Display a listing of the resource.
     * 
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        // get all users
        return 'index';
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param   \Illuminate\Http\Request    $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create a user
        return 'store';
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     * 
     * @param   int $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show a user
        return 'show';
        return User::find($id);
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
        // update a user
        return 'update';
        $user = User::find($id);
        return $request->all();
        #$user->update($request->all());
        #return $post;
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param   int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete a user
        return 'delete';
        return User::destroy($id);
    }
}
