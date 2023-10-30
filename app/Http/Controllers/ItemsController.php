<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\items;




class ItemsController extends Controller
{
    public function create()
{
    return view('foods.create');
}




public function store(Request $request)
    {
        $request->validate([
            'foods_name' => 'required',
            
            
            
        ]);
    
        
        
        
      items::create([
        'foods_name'=> $request->foods_name,
      ]);

return redirect('foods/show')->with('success', 'Form submitted successfully');
        
    }

    public function show()
    {
        $items = Items::all(); // Corrected case: $items instead of $Items
        return view('foods.show', compact('items'));
    }


    public function edit($id)
{
    $item = Items::find($id);

    if (!$item) {
        return redirect('foods/show')->with('error', 'Item not found');
    }

    return view('foods.edit', compact('item'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'foods_name' => 'required',
    ]);

    $item = Items::find($id);

    if (!$item) {
        return redirect('foods/show')->with('error', 'Item not found');
    }

    $item->foods_name = $request->foods_name;
    $item->save();

    return redirect('foods/show')->with('success', 'Item updated successfully');
}


public function destroy($id)
{
    $item = Items::find($id);

    if (!$item) {
        return redirect('foods/show')->with('error', 'Item not found');
    }

    $item->delete();

    return redirect('foods/show')->with('success', 'Item deleted successfully');
}

}
