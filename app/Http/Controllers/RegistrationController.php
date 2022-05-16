<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
        return view('register', compact('user'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validatedData = $request->validate([
              'name' => 'required',
              'email' => 'required', 'unique:users',
              'password' => 'required_with:password_confirmation|same:password_confirmation',
              'password_confirmation' => 'required',
          ]);    
          
          $valildatedData['password'] = bcrypt($validatedData['password']);

          if(empty($request->session()->get('user'))){
            $user = new User();
            $user->fill($validatedData);
            $request->session()->put('user', $user);
          }
          else{
            $user = $request->session()->get('user');
            $user->fill($validatedData);
            $request->session()->put('user', $user);
          }

    

          return redirect('/register2');


    }




    public function index2(Request $request)
    {
        $user = $request->session()->get('user');
        return view('register2', compact('user'));
    }

    public function store2(Request $request)
    {



        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'pengalaman' => 'required',
            'skill' => 'required',
            'image' => 'image|file|max:1000|mimes:jpg,png,jpeg,gif',
        ]);    

        $user = $request->session()->get('user');

        if($request->file('image')){
            $user->image = $request->file('image')->store('user-images');
        }
        $user->fill($validatedData);
        $user->save();

        $request->session()->forget('user');

        return redirect('/');

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
