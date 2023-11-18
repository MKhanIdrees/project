<?php

namespace App\Http\Controllers;

use App\Models\Shopkeeper;
use Illuminate\Database\Eloquent\Model;
use DB;


use Illuminate\Http\Request;

class ShopkeeperController extends Controller
{
    public function shopkeeper_index()
    {
        return view('shopkeepers.shopkeeper_index', ['shopkeepers' => shopkeeper::latest()->paginate(6)]);
    }

    public function shopkeeper_form()
    {
        return view('shopkeepers.shopkeeper_form');
    }




    public function search(Request $request)
    {
        $query = $request->input('query');
        $shopkeepers = shopkeeper::where('shopkeeper_name', 'LIKE', "%$query%")->get();

        return view('shopkeepers.shopkeeper_index', compact('shopkeepers'));
    }






    public function store(Request $request)
    {
        $request->validate([
            'shopkeeper_name' => 'required',
            'shop_name' => 'required',
            'shopkeeper_contact' => 'required|integer',
            'shopkeeper_email' => 'required',
            'shopkeeper_district' => 'required',
            'shopkeeper_tehsil' => 'required',
            'shopkeeper_village' => 'required',


        ]);




        $shopkeeper = new Shopkeeper();

        // Assign values to the model's properties
        $shopkeeper->shopkeeper_name = $request->input('shopkeeper_name');
        $shopkeeper->shop_name = $request->input('shop_name');
        $shopkeeper->shopkeeper_contact = (int)$request->input('shopkeeper_contact');
        $shopkeeper->shopkeeper_email = $request->input('shopkeeper_email');
        $shopkeeper->shopkeeper_district = $request->input('shopkeeper_district');
        $shopkeeper->shopkeeper_tehsil = $request->input('shopkeeper_tehsil');
        $shopkeeper->shopkeeper_village = $request->input('shopkeeper_village');

        $shopkeeper->save();

        return redirect('/shopkeepers/shopkeeper_index')->with('success', 'Form submitted successfully');
    }

    public function shopkeeper_show($id)
    {
        $shopkeepers = Shopkeeper::where('id', $id)->first();
        return view('shopkeepers.shopkeeper_show', ['shopkeepers' => $shopkeepers]);
    }



    public function shopkeeper_edit($id)
    {
        $shopkeepers = shopkeeper::where('id', $id)->first();
        return view('shopkeepers.shopkeeper_edit', ['shopkeepers' => $shopkeepers]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'shopkeeper_name' => 'required',
            'shop_name' => 'required',
            'shopkeeper_contact' => 'required|integer',
            'shopkeeper_email' => 'required',
            'shopkeeper_district' => 'required',
            'shopkeeper_tehsil' => 'required',
            'shopkeeper_village' => 'required',
        ]);

        // Find the shopkeeper by ID
        $shopkeeper = Shopkeeper::find($id);

        if (!$shopkeeper) {
            return redirect('/shopkeepers/shopkeeper_index')->with('error', 'Shopkeeper not found');
        }

        // Update the shopkeeper's properties
        $shopkeeper->shopkeeper_name = $request->input('shopkeeper_name');
        $shopkeeper->shop_name = $request->input('shop_name');
        $shopkeeper->shopkeeper_contact = (int) $request->input('shopkeeper_contact');
        $shopkeeper->shopkeeper_email = $request->input('shopkeeper_email');
        $shopkeeper->shopkeeper_district = $request->input('shopkeeper_district');
        $shopkeeper->shopkeeper_tehsil = $request->input('shopkeeper_tehsil');
        $shopkeeper->shopkeeper_village = $request->input('shopkeeper_village');

        // Save the updated shopkeeper
        $shopkeeper->save();

        return redirect('/shopkeepers/shopkeeper_index')->with('success', 'Form updated successfully');
    }


    public function destroy($id)
    {
        $shopkeeper = Shopkeeper::find($id);

        if (!$shopkeeper) {
            return back()->withError('Record not found');
        }

        $shopkeeper->delete();

        return back()->withSuccess('Record deleted successfully');
    }
}
