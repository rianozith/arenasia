<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Validator;
use Redirect;
use Session;
use Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['users' => \App\User::paginate(15),];
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['list' => \App\role::pluck('role', 'role'),];
        return view('admin.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name'  => 'required|min:5|max:15',
            'username' => 'required|min:5|max:100',
            'email'  => 'required|email',
            'password'  => 'required|min:5',
        ])->validate();
        
        $user                  = new \App\User;
        $user->name            = $request->input('name');
        $user->username        = $request->input('username');
        $user->email           = $request->input('email');
        $user->password        = Hash::make($request->input('password'));
        $user->role            = $request->input('role');
        $user->save();
        
        $request->session()->flash('success', 'The user was successfully saved!');
        return redirect('dashboard/user');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ['user' => \App\User::findOrFail($id),];
        return view('admin.user.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'user' => \App\User::findOrFail($id),
            'list' => \App\role::pluck('role', 'role'),];
        return view('admin.user.edit', $data);
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
        $this->validate($request, [
            'name'  => 'required|min:5|max:15',
            'username' => 'required|min:5|max:100',
            'email'  => 'required|email',
            'password'  => 'required|min:5',
        ]);
        
        $user               = \App\User::findOrFail($id);
        $user->name         = $request->input('name');
        $user->username     = $request->input('username');
        $user->email        = $request->input('email');
        $user->password     = Hash::make($request->input('password'));
        $user->role         = $request->input('role');
        $user->save();
        
        $request->session()->flash('success', 'The user was successfully Updated!');
        return redirect('dashboard/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrFail($id)->delete();
        Session::flash('success', 'The data was successfully deleted!');
        return redirect('dashboard/user');

    }
}
