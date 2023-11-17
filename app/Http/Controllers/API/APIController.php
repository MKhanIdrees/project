<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\widow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    public function WidowAddstore(Request $request)
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

        $widow = new widow();
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
                'message' => "Added Successfully",
            ]);
        }
    }

    public function WidowAll(Request $request)
    {
        return widow::all();
    }
    public function WidowSingle($id)
    {
        $deleted = widow::where('id', $id)->first();
        return $this->ResponseData($deleted);
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
