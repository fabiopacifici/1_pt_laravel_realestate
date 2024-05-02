<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(House::all());
        return view('admin.houses.index', ['houses' => House::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.houses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->all();
        //$house = new House();
        /*         $house->reference_code = $data['reference_code'];
        $house->description = $data['description'];
        $house->square_meters = $data['square_meters'];
        $house->price = $data['price'];
        $house->exterior = $data['exterior']; */
        /* $house->fill($data);
        $house->save(); */
        House::create($data);
        // TODO: pattern POST-REDIRECT-GET

        return to_route('admin.houses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        //dd(House::findOrFail($id));
        //dd($house);

        return view('admin.houses.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
