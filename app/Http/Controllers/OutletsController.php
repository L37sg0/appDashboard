<?php

namespace App\Http\Controllers;

use App\Outlet;
use App\Substation;
use Illuminate\Http\Request;

class OutletsController extends Controller
{
    public function index()
    {
        $outlets = Outlet::orderBy('updated_at', 'desc')
                        ->paginate(10);

        return view('structure.outlets.index', compact('outlets'));
    }

    /* public function search(Request $request)
    {
        // Using validation
        $this->validate($request, [
            'name' => 'required',
            'substation_id' => 'required',
        ]);
        $outlets = Outlet::find($request->input('name'))
                        ->orderBy('updated_at', 'desc')
                        ->paginate(1);

        return view('structure.outlets.index', compact('outlets'));
    } */

    public function show($id)
    {
        $outlet = Outlet::find($id);

        return view('structure.outlets.show')
                ->with('outlet', $outlet);
    }

    public function create()
    {
        $substations = Substation::all()->toArray();
        $substations = array_column($substations, 'name', 'id');
        return view('structure.outlets.create')
                ->with('substations' , $substations);
    }

    public function store( Request $request)
    {
        // Using validation
        $this->validate($request, [
            'name' => 'required',
            'substation_id' => 'required',
            'description'   => 'required',
        ]);

        // Create outlet
        $outlet = new Outlet;
        $outlet->name = $request->input('name');
        $outlet->substation_id = $request->input('substation_id');
        $outlet->description = $request->input('description');
        $outlet->save();

        // Redirection
        return redirect('/outlets')
                ->with('success', 'Извод Добавен');
    }

    public function edit($id)
    {
        $outlet = Outlet::find($id);
        $substations = Substation::all()->toArray();
        $substations = array_column($substations, 'name', 'id');

        return view('structure.outlets.edit')
                ->with('outlet', $outlet)
                ->with('substations' , $substations);
    }
    public function update( Request $request, $id)
    {

        // Using validation
        $this->validate($request, [
            'name' => 'required',
            'substation_id' => 'required',
            'description'   => 'required',
        ]);

        // Create outlet
        $outlet = Outlet::find($id);
        $outlet->name = $request->input('name');
        $outlet->substation_id = $request->input('substation_id');
        $outlet->description = $request->input('description');
        $outlet->save();

        // Redirection
        return redirect('/outlets')
                ->with('success', 'Извод Променен');
    }

    public function destroy($id)
    {
        $outlet = Outlet::find($id);
        /* foreach($outlet->turbines as $turbine){
            $turbine->delete();
        } */
        $outlet->delete();

        return redirect('/outlets')
                ->with('success', 'Извод Премахнат');
    }
}
