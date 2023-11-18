<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\shopkeeper;
use App\Models\widow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    public static function WidowAddstore(Request $request, $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'husband_name' => 'required',
            'widow_contact' => 'required|integer',
            'widow_nic' => 'required|integer',
            'husband_nic' => 'required|integer',
            'Certificate' => 'required',
            'affidavit' => 'required',
            'guardian_name' => 'required',
            'relationship' => 'required',
            'guardian_contact' => 'required|integer',
            'kids' => 'required',
            'form_b' => 'required',
            'widow_district' => 'required',
            'widow_tehsil' => 'required',
            'widow_village' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $CertificateUrl = ''; // Initialize variable for Certificate URL
        $affidavitUrl = ''; // Initialize variable for affidavit URL
        $formBUrl = ''; // Initialize variable for form B URL

        if ($request->hasFile('Certificate')) {
            $certificateExtension = $request->file('Certificate')->extension();
            $Certificate = time() . '_certificate.' . $certificateExtension;
            $request->file('Certificate')->move(public_path('widows'), $Certificate);
            $CertificateUrl = url('widows/' . $Certificate); // Store the URL
        }

        if ($request->hasFile('affidavit')) {
            $affidavitExtension = $request->file('affidavit')->extension();
            $affidavit = time() . '_affidavit.' . $affidavitExtension;
            $request->file('affidavit')->move(public_path('widows'), $affidavit);
            $affidavitUrl = url('widows/' . $affidavit); // Store the URL
        }

        if ($request->hasFile('form_b')) {
            $formBExtension = $request->file('form_b')->extension();
            $form_b = time() . '_form_b.' . $formBExtension;
            $request->file('form_b')->move(public_path('widows'), $form_b);
            $formBUrl = url('widows/' . $form_b); // Store the URL
        }

        $widow = new widow();
        $widow->widow_name = $request->input('name');
        $widow->husband_name = $request->input('husband_name');
        $widow->widow_contact = (int)$request->input('widow_contact');
        $widow->widow_nic = $request->input('widow_nic');
        $widow->husband_nic = $request->input('husband_nic');
        $widow->email = $request->input('email');
        $widow->guardian_name = $request->input('guardian_name');
        $widow->relationship = $request->input('relationship');
        $widow->guardian_contact = (int)$request->input('guardian_contact');
        $widow->kids = $request->input('kids');
        $widow->Certificate = $CertificateUrl;
        $widow->affidavit = $affidavitUrl;
        $widow->form_b = $formBUrl;

        $widow->widow_district = $request->input('widow_district');
        $widow->widow_tehsil = $request->input('widow_tehsil');
        $widow->widow_village = $request->input('widow_village');
        $widow->user_id = $user->id;
        if ($widow->save()) {
            return response()->json([
                'status' => 200,
                'message' => "Added Successfully",
            ]);
        }
    }
    public function WidowAll()
    {
        return widow::all();
    }
    public function WidowSingle($id)
    {
        return $deleted = widow::where('id', $id)->first();
    }
    public function WidowDelet($id)
    {
        $deleted = widow::where('id', $id)->delete();
        return $this->ResponseData($deleted);
    }
    public function WidowUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'widow_name' => 'required',
            'husband_name' => 'required',
            'widow_contact' => 'required|integer',
            'widow_nic' => 'required|integer',
            'husband_nic' => 'required|integer',
            'email' => 'required',
            'Certificate' => 'required',
            'affidavit' => 'required',
            'guardian_name' => 'required',
            'relationship' => 'required',
            'guardian_contact' => 'required|integer',
            'kids' => 'required',
            'form_b' => 'required',
            'widow_district' => 'required',
            'widow_tehsil' => 'required',
            'widow_village' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $CertificateUrl = ''; // Initialize variable for Certificate URL
        $affidavitUrl = ''; // Initialize variable for affidavit URL
        $formBUrl = ''; // Initialize variable for form B URL

        if ($request->hasFile('Certificate')) {
            $certificateExtension = $request->file('Certificate')->extension();
            $Certificate = time() . '_certificate.' . $certificateExtension;
            $request->file('Certificate')->move(public_path('widows'), $Certificate);

            $CertificateUrl = url('widows/' . $Certificate); // Store the URL
        }

        if ($request->hasFile('affidavit')) {
            $affidavitExtension = $request->file('affidavit')->extension();
            $affidavit = time() . '_affidavit.' . $affidavitExtension;
            $request->file('affidavit')->move(public_path('widows'), $affidavit);

            $affidavitUrl = url('widows/' . $affidavit); // Store the URL
        }

        if ($request->hasFile('form_b')) {
            $formBExtension = $request->file('form_b')->extension();
            $form_b = time() . '_form_b.' . $formBExtension;
            $request->file('form_b')->move(public_path('widows'), $form_b);

            $formBUrl = url('widows/' . $form_b); // Store the URL
        }

        $widow =  widow::where('id', $id)->first();
        $widow->widow_name = $request->input('widow_name');
        $widow->husband_name = $request->input('husband_name');
        $widow->widow_contact = (int)$request->input('widow_contact'); // Convert to integer
        $widow->widow_nic = $request->input('widow_nic');
        $widow->husband_nic = $request->input('husband_nic');
        $widow->email = $request->input('email');
        $widow->guardian_name = $request->input('guardian_name');
        $widow->relationship = $request->input('relationship');
        $widow->guardian_contact = (int)$request->input('guardian_contact'); // Convert to integer
        $widow->kids = $request->input('kids'); // Assuming 'kids' is a field in your form
        // Update the properties with file URLs
        $widow->Certificate = $CertificateUrl;
        $widow->affidavit = $affidavitUrl;
        $widow->form_b = $formBUrl;

        $widow->widow_district = $request->input('widow_district');
        $widow->widow_tehsil = $request->input('widow_tehsil');
        $widow->widow_village = $request->input('widow_village');
        if ($widow->save()) {
            return response()->json([
                'status' => 200,
                'message' => "Updated Successfully",
            ]);
        }
    }

    public function Widowsearch(Request $request)
    {
        $data = $request->input('search');
        return widow::where('widow_name', 'like', '%' . $data . '%')->first();
    }

    // Shopkeeper API
    public static function ShoopkeeperAdd(Request $request,$user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'shop_name' => 'required',
            'shopkeeper_contact' => 'required|integer',
            'shopkeeper_email' => 'required',
            'shopkeeper_district' => 'required',
            'shopkeeper_tehsil' => 'required',
            'shopkeeper_village' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $shopkeeper = new Shopkeeper();
        $shopkeeper->shopkeeper_name = $request->input('name');
        $shopkeeper->shop_name = $request->input('shop_name');
        $shopkeeper->shopkeeper_contact = (int)$request->input('shopkeeper_contact');
        $shopkeeper->shopkeeper_email = $request->input('shopkeeper_email');
        $shopkeeper->shopkeeper_district = $request->input('shopkeeper_district');
        $shopkeeper->shopkeeper_tehsil = $request->input('shopkeeper_tehsil');
        $shopkeeper->shopkeeper_village = $request->input('shopkeeper_village');
        $shopkeeper->user_id = $user->id;
        if ($shopkeeper->save()) {
            return response()->json([
                'status' => 200,
                'message' => "Added Successfully",
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "not added",
            ]);
        }
    }
    public function Shoopkeeperupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'shopkeeper_name' => 'required',
            'shop_name' => 'required',
            'shopkeeper_contact' => 'required|integer',
            'shopkeeper_email' => 'required',
            'shopkeeper_district' => 'required',
            'shopkeeper_tehsil' => 'required',
            'shopkeeper_village' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $shopkeeper =  Shopkeeper::where('id', $id)->first();
        $shopkeeper->shopkeeper_name = $request->input('shopkeeper_name');
        $shopkeeper->shop_name = $request->input('shop_name');
        $shopkeeper->shopkeeper_contact = (int)$request->input('shopkeeper_contact');
        $shopkeeper->shopkeeper_email = $request->input('shopkeeper_email');
        $shopkeeper->shopkeeper_district = $request->input('shopkeeper_district');
        $shopkeeper->shopkeeper_tehsil = $request->input('shopkeeper_tehsil');
        $shopkeeper->shopkeeper_village = $request->input('shopkeeper_village');
        if ($shopkeeper->save()) {
            return response()->json([
                'status' => 200,
                'message' => "Updated Successfully",
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "not added",
            ]);
        }
    }
    public function ShoopkeeperAll(Request $request)
    {
        return Shopkeeper::all();
    }
    public function ShoopkeeperSingle($id)
    {
        return Shopkeeper::where('id', $id)->first();
    }
    public function Shoopkeeperdelete($id)
    {
        $shopkeepers = Shopkeeper::where('id', $id)->delete();
        return $this->ResponseData($shopkeepers);
    }
    public function Shoopkeepersearch(Request $request)
    {
        $query = $request->input('query');
        return shopkeeper::where('shopkeeper_name', 'LIKE', "%$query%")->get();
    }






    public function ResponseData($deleted)
    {
        if (!$deleted) {
            return response()->json([
                'status' => 401,
                'message' => "Not Found",
            ]);
        } else {
            return response()->json([
                'status' => 200,
                'message' => "Deleted Added Successfully",
            ]);
        }
    }
}
