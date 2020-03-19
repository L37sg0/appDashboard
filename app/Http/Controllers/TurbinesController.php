<?php

namespace App\Http\Controllers;

use App\Turbine;
use App\Windpark;
use Illuminate\Http\Request;

class TurbinesController extends Controller
{
    public function index()
    {
        $turbines = Turbine::orderBy('updated_at', 'desc')
                        ->paginate(10);

        return view('structure.turbines.index', compact('turbines'));
    }

    /* public function search(Request $request)
    {
        // Using validation
        $this->validate($request, [
            'name' => 'required',
        ]);
        $turbines = Turbine::find($request->input('name'))
                        ->orderBy('updated_at', 'desc')
                        ->paginate(1);

        return view('structure.turbines.index', compact('turbines'));
    } */

    public function show($id)
    {
        $turbine = Turbine::find($id);

        return view('structure.turbines.show')
                ->with('turbine', $turbine);
    }

    public function create()
    {
        $windparks = Windpark::all()->toArray();
        $windparks = array_column($windparks, 'name', 'id');

        return view('structure.turbines.create')
                ->with('windparks', $windparks);
    }

    public function store( Request $request)
    {
        // Using validation in store
        $this->validate($request, [
            'windpark_id'       => 'required',
            'name'              => 'required',
            'serial_number'     => 'required',
            'vendor'            => 'required',
            'model'             => 'required',
            'power'             => 'required',
            'owner'             => 'required',/*
            'gearbox_vendor'    => 'nullable',
            'gearbox_number'    => 'nullable',
            'hydraulics_vendor' => 'nullable',
            'hydraulics_number' => 'nullable',
            'transformer_vendor'=> 'nullable',
            'transformer_number'=> 'nullable', */
        ]);

        // Create turbine
        $turbine = new Turbine;
        $turbine->windpark_id= $request->input('windpark_id');
        $turbine->name= $request->input('name');
        $turbine->serial_number= $request->input('serial_number');
        $turbine->vendor= $request->input('vendor');
        $turbine->model= $request->input('model');
        $turbine->power= $request->input('power');
        $turbine->owner= $request->input('owner');
        $turbine->gearbox_vendor= $request->input('gearbox_vendor');
        $turbine->gearbox_number= $request->input('gearbox_number');
        $turbine->hydraulics_vendor= $request->input('hydraulics_vendor');
        $turbine->hydraulics_number= $request->input('hydraulics_number');
        $turbine->transformer_vendor= $request->input('transformer_vendor');
        $turbine->transformer_number= $request->input('transformer_number');
        $turbine->save();

        // Redirection
        return redirect('/turbines')
                ->with('success', 'Турбина Добавена');
    }

    public function edit($id)
    {
        $turbine = Turbine::find($id);
        $windparks = Windpark::all()->toArray();
        $windparks = array_column($windparks, 'name', 'id');

        return view('structure.turbines.edit')
                ->with('turbine', $turbine)
                ->with('windparks', $windparks);
    }
    public function update( Request $request, $id)
    {

        // Using validation on update
        $this->validate($request, [
            'windpark_id'       => 'required',
            'name'              => 'required',
            'serial_number'     => 'required',
            'vendor'            => 'required',
            'model'             => 'required',
            'power'             => 'required',
            'owner'             => 'required',
            /* 'gearbox_vendor'    => 'required',
            'gearbox_number'    => 'required',
            'hydraulics_vendor' => 'required',
            'hydraulics_number' => 'required',
            'transformer_vendor'=> 'required',
            'transformer_number'=> 'required', */
        ]);

        // Find turbine
        $turbine = Turbine::find($id);
        $turbine->windpark_id= $request->input('windpark_id');
        $turbine->name= $request->input('name');
        $turbine->serial_number= $request->input('serial_number');
        $turbine->vendor= $request->input('vendor');
        $turbine->model= $request->input('model');
        $turbine->power= $request->input('power');
        $turbine->owner= $request->input('owner');
        $turbine->gearbox_vendor= $request->input('gearbox_vendor');
        $turbine->gearbox_number= $request->input('gearbox_number');
        $turbine->hydraulics_vendor= $request->input('hydraulics_vendor');
        $turbine->hydraulics_number= $request->input('hydraulics_number');
        $turbine->transformer_vendor= $request->input('transformer_vendor');
        $turbine->transformer_number= $request->input('transformer_number');
        $turbine->save();

        // Redirection
        return redirect('/turbines')
                ->with('success', 'Турбина Променена');
    }

    public function destroy($id)
    {
        $turbine = Turbine::find($id);
        $turbine->delete();

        return redirect('/turbines')
                ->with('success', 'Турбина Премахната');
    }
}
