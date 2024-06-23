<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryDetail;
use Illuminate\Http\Request;

class InventoryController extends Controller
{

    public function index()
    {

    }
    public function mobile()
    {

        $inventories = Inventory::where('type', 'phone')->get();
        return view('mobile')->with('inventories', $inventories);
    }


    public function create()
    {
        return view('avalable');
    }


    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'model' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        Inventory::create($request->all());

        return redirect()->back()->with('success', 'Inventory created successfully.');
    }
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->back()->with('success', 'Inventory item deleted successfully.');
    }



    public function show(Inventory $inventory)
    {

    }

    public function edit(Inventory $inventory)
    {
        return view('edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
{
    $request->validate([
        'quantity' => 'required',
        'price' => 'required',
    ]);

    $inventory->update([
        'quantity' => $request->quantity,
        'price' => $request->price,
    ]);

    return redirect()->back()->with('success', 'Quantity and price updated successfully.');
}

}
