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
        return view('admin.houses.index', ['houses' => House::orderByDesc('id')->paginate(8)]);
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
        // Validate

        $val_data = $request->validate([
            'reference_code' => 'required',
            'cover_image' => 'required|max:255',
            'description' => 'required|min:5|max:2000',
            'square_meters' => 'required',
            'price' => 'nullable',
            'exterior' => 'nullable'
        ]);

        //dd($valdata);
        //$data = $request->all();

        //$house = new House();
        /*         $house->reference_code = $data['reference_code'];
        $house->description = $data['description'];
        $house->square_meters = $data['square_meters'];
        $house->price = $data['price'];
        $house->exterior = $data['exterior']; */
        /* $house->fill($data);
        $house->save(); */

        /* Create the resource */
        House::create($val_data);


        /* POST/REDIRECT/GET pattern */
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
    public function edit(House $house)
    {
        //dd($house);
        return view('admin.houses.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        //Validate your data
        $val_data = $request->validate([
            'reference_code' => 'required',
            'cover_image' => 'required|max:255',
            'description' => 'required|min:5|max:2000',
            'square_meters' => 'required',
            'price' => 'nullable',
            'exterior' => 'nullable'
        ]);

        //dd($request->all(), $house);
        $house->update($val_data);
        return to_route('admin.houses.edit', $house);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        //dd($house);
        $house->delete();
        return to_route('admin.houses.index');
    }
}
