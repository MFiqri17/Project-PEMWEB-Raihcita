<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lomba;
use App\Http\Middleware\Auth;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(){
        
        return view('lomba', ['lombas' => Lomba::latest()->filter(request(['search']))->paginate(6)]);
    }

    public function detail($id){
        $lomba = lomba::findorfail($id);
        return view('detaillomba', compact('lomba'));
    }

    public function index() // For Admin
    {
        $lomba = Lomba::all();
        return view('dashboardLomba', compact('lomba'));
    }

    public function adminForm()
    {
        return view('addlomba');
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
        
        $lomba = new Lomba();

        if($request->file('image')){
            $lomba->image = $request->file('image')->store('lomba-images');
        }
        $lomba->fill($validatedData);
        $lomba->save();
        
        return redirect('/dashboard/lomba');

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
        $lomba = Lomba::findOrFail($id);
        return view('updatelomba', compact('lomba'));
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

            $lomba = Lomba::findOrFail($id);
            $lomba->name = $request->name;
            $lomba->organizer = $request->organizer;
            $lomba->startDate = $request->startDate;
            $lomba->endDate = $request->endDate;
            $lomba->link = $request->link;
            $lomba->description = $request->description;
            $lomba->requirement = $request->requirement;
            if($request->file('image')){
                $lomba->image = $request->file('image')->store('lomba-images');
            }
            $lomba->save();
            
            return redirect('/dashboard');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lomba $lomba)
    {
        $lomba->delete();
        return redirect('/dashboard')->with('success', 'Data Beasiswa Berhasil Dihapus');
    }
}
