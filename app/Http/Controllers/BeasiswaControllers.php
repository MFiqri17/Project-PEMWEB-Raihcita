<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;

class BeasiswaControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beasiswa = Beasiswa::all();
        return view('dashbord', compact('beasiswa'));
    }

    public function adminForm()
    {
        return view('adminForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        
        $validatedData = $request->validate([
            'name' => 'required',
            'organizer' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'link' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1000|mimes:jpg,png,jpeg,gif',
        ]);
        
        $beasiswa = new Beasiswa();

        if($request->file('image')){
            $beasiswa->image = $request->file('image')->store('beasiswa-images');
        }
        $beasiswa->fill($validatedData);
        $beasiswa->save();
        
        return redirect('/dashboard');

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


     public function edit(Request $request, $id) {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('edit', compact('beasiswa'));
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

        // 'name' => 'required',
        // 'organizer' => 'required',
        // 'startDate' => 'required',
        // 'endDate' => 'required',
        // 'link' => 'required',
        // 'description' => 'required',
        // 'image' => 'image|file|max:1000|mimes:jpg,png,jpeg,gif',

            $beasiswa = Beasiswa::findOrFail($id);
            $beasiswa->name = $request->name;
            $beasiswa->organizer = $request->organizer;
            $beasiswa->startDate = $request->startDate;
            $beasiswa->endDate = $request->endDate;
            $beasiswa->link = $request->link;
            $beasiswa->description = $request->description;
            if($request->file('image')){
                $beasiswa->image = $request->file('image')->store('beasiswa-images');
            }
            $beasiswa->save();
            
            return redirect()->back()->with('success','Data updated successfully');
        
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
