<?php

namespace App\Http\Controllers;


use App\Substation;
use Illuminate\Http\Request;

class SubstationsController extends Controller
{
    public function index()
    {
        $substations = Substation::orderBy('updated_at', 'desc')
                        ->paginate(10);

        return view('structure.substations.index', compact('substations'));
    }

    /* public function search(Request $request)
    {
        // Using validation
        $this->validate($request, [
            'name' => 'required',
        ]);
        $substations = Substation::find($request->input('name'))
                        ->orderBy('updated_at', 'desc')
                        ->paginate(1);

        return view('structure.substations.index', compact('substations'));
    } */

    public function show($id)
    {
        $substation = Substation::find($id);

        return view('structure.substations.show')
                ->with('substation', $substation);
    }

    public function create()
    {
        return view('structure.substations.create');
    }

    public function store( Request $request)
    {
        // Using validation
        $this->validate($request, [
            'name' => 'required',
            'description'   => 'required',
        ]);

        // Create substation
        $substation = new Substation;
        $substation->name = $request->input('name');
        $substation->description = $request->input('description');
        $substation->save();

        // Redirection
        return redirect('/substations')
                ->with('success', 'Подстанция Добавена');
    }

    public function edit($id)
    {
        $substation = Substation::find($id);

        return view('structure.substations.edit')
                ->with('substation', $substation);
    }
    public function update( Request $request, $id)
    {

        // Using validation
        $this->validate($request, [
            'name' => 'required',
            'description'   => 'required',
        ]);

        // Create substation
        $substation = Substation::find($id);
        $substation->name = $request->input('name');
        $substation->description = $request->input('description');
        $substation->save();

        // Redirection
        return redirect('/substations')
                ->with('success', 'Подстанция Променена');
    }

    public function destroy($id)
    {
        $substation = Substation::find($id);
        foreach($substation->outlets as $outlet){
            $outlet->delete();
        }
        $substation->delete();

        return redirect('/substations')
                ->with('success', 'Подстанция Премахната');
    }
}
