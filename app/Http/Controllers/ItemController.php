<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Item::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newItem = new Item;
        $newItem->name = $request->item['name'];

        $newItem->save();
        return $newItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $existingItem = Item::find($id);
        // return $existingItem;

        if ($existingItem) {

            $existingItem->completed = $request->item['completed'] == true ? 'true' : 'false';
            $existingItem->completed_at = $request->item['completed'] == true ? Carbon::now() : null;
            $existingItem->save();

            return $existingItem;
        } else {
            return 'item not found !';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $existingItem = Item::find($id);
        // return $existingItem;

        if ($existingItem) {
            $existingItem->delete();
            return 'item successfuly deleted';
        } else {
            return 'item not found !';
        }
    }
}
