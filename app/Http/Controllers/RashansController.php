<?php

namespace App\Http\Controllers;
use App\Models\rashans;
use DB;

use Illuminate\Http\Request;

class RashansController extends Controller
{
    public function rashan()
{
    return view('rashans.rashan');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
       
        
        
    ]);

    
    

    $rashan = new rashans();

// Assign values to the model's properties
$rashan->name = $request->input('name');

$rashan->save();

return redirect('/shopkeepers/shopkeeper_index')->with('success', 'Form submitted successfully');

}

}