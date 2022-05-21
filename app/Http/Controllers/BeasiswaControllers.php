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

    public function show(){
        
        return view('beasiswa', ['beasiswa' => Beasiswa::latest()->filter(request(['search']))->paginate(6)]);
    }

    public function detail($id){
        $beasiswa = Beasiswa::findorfail($id);
        return view('detailBeasiswa', compact('beasiswa'));
    }

    public function index()
    {
        $beasiswa = Beasiswa::all();
        return view('dashbord', compact('beasiswa'));
    }

    public function adminForm()
    {
        return view('addBeasiswa');
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
            'requirement' => 'required',
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function edit(Request $request, $id) {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('updateBeasiswa', compact('beasiswa'));
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
            $beasiswa->requirement = $request->requirement;
            if($request->file('image')){
                $beasiswa->image = $request->file('image')->store('beasiswa-images');
            }
            $beasiswa->save();
            
            return redirect('/dashboard');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beasiswa $beasiswa)
    {
        $beasiswa->delete();
        return redirect('/dashboard')->with('success', 'Data Beasiswa Berhasil Dihapus');
    }
}
