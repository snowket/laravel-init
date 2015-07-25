<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\UserStoreRequest;
use App\Http\Controllers\Controller;
use App\Person;
use App\PersonType;
Use Illuminate\Support\Facades\Auth;


class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $persons=Person::all();
        return view('admin.person',compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $types=PersonType::all();
        return view('admin.person_create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserStoreRequest $request)
    {
        $persons=new Person();
        $persons->FirstName=$request->input('FistName');
        $persons->LastName=$request->input('LastName');
        $persons->Number=$request->input('Number');
        $persons->PersonalNumber=$request->input('PersonalNumber');
        $persons->status=$request->input('type');
        $persons->password=bcrypt($request->input('passwod'));
        $persons->save();
        return redirect('person');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user=Person::FindOrFail($id);
        if(!isset($user))
            return redirect('person');

        return view('admin.person_profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
