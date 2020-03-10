<?php

namespace App\Http\Controllers;


use App\Windpark;
use Illuminate\Http\Request;

class WindparksController extends Controller
{
    public function index()
    {
        $windparks = Windpark::orderBy('updated_at', 'desc')
                        ->paginate(10);

        return view('windparks.index', compact('windparks'));
    }

    /* public function search(Request $request)
    {
        // Using validation
        $this->validate($request, [
            'name' => 'required',
        ]);
        $windparks = Windpark::find($request->input('name'))
                        ->orderBy('updated_at', 'desc')
                        ->paginate(1);

        return view('windparks.index', compact('windparks'));
    } */

    public function show($id)
    {
        $windpark = Windpark::find($id);

        return view('windparks.show')
                ->with('windpark', $windpark);
    }

    public function create()
    {
        return view('windparks.create');
    }

    public function store( Request $request)
    {
        // Using validation
        $this->validate($request, [
            'name' => 'required',
            'owner'   => 'required',
            'description'   => 'required',
        ]);

        // Create windpark
        $windpark = new Windpark;
        $windpark->name = $request->input('name');
        $windpark->owner = $request->input('owner');
        $windpark->description = $request->input('description');
        $windpark->save();

        // Redirection
        return redirect('/windparks')
                ->with('success', 'Ветропарк Добавен');
    }

    public function edit($id)
    {
        $windpark = Windpark::find($id);

        return view('windparks.edit')
                ->with('windpark', $windpark);
    }
    public function update( Request $request, $id)
    {

        // Using validation
        $this->validate($request, [
            'name' => 'required',
            'owner'   => 'required',
            'description'   => 'required',
        ]);

        // Create windpark
        $windpark = Windpark::find($id);
        $windpark->name = $request->input('name');
        $windpark->owner = $request->input('owner');
        $windpark->description = $request->input('description');
        $windpark->save();

        // Redirection
        return redirect('/windparks')
                ->with('success', 'Ветропарк Променен');
    }

    public function destroy($id)
    {
        $windpark = Windpark::find($id);
        foreach($windpark->turbines as $turbine){
            $turbine->delete();
        }
        $windpark->delete();

        return redirect('/windparks')
                ->with('success', 'Ветропарк Премахнат');
    }
}
