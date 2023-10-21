<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\http\Requests\UserRequest;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return User::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $User = User::findOrFail($id);

        $User->delete();

        return $User;
    }
}