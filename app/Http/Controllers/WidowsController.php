<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use App\Models\Widow; // Assuming your model is named Widow with a capital 'W'
use DB;
use PDF;


class WidowsController extends Controller
{

    public function index()
    {
        return view('welcome');
        // return view('widows.index',['widows'=>widow::get()]);

    }

    public function form()
    {
        return view('user.form');
    }

    public function home()
    {
        return view('user.home');
    }


    public function about()
    {
        return view('user.about');
    }


    public function contact()
    {
        return view('user.contact');
    }


    public function gallery()
    {
        return view('user.gallery');
    }


    public function search_data(Request $request)
    {
        $data = $request->input('search');
        $widows = DB::table('widows')->where('widow_name', 'like', '%' . $data . '%')->get();
        return view('widows.index', compact('widows'));
    }

    public function store(Request $request)
    {
        // validate data
        $request->validate([
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

        if ($request->hasFile('Certificate')) {
            $certificateExtension = $request->file('Certificate')->extension();
            $Certificate = time() . '_certificate.' . $certificateExtension;
            $request->file('Certificate')->move(public_path('widows'), $Certificate);
        }

        if ($request->hasFile('affidavit')) {
            $affidavitExtension = $request->file('affidavit')->extension();
            $affidavit = time() . '_affidavit.' . $affidavitExtension;
            $request->file('affidavit')->move(public_path('widows'), $affidavit);
        }

        if ($request->hasFile('form_b')) {
            $formBExtension = $request->file('form_b')->extension();
            $form_b = time() . '_form_b.' . $formBExtension;
            $request->file('form_b')->move(public_path('widows'), $form_b);
        }


        $widow = new Widow();

        $widow->widow_name = $request->input('widow_name');
        $widow->husband_name = $request->input('husband_name');
        $widow->widow_contact = (int)$request->input('widow_contact'); // Convert to integer
        $widow->widow_nic = $request->input('widow_nic');
        $widow->husband_nic = $request->input('husband_nic');
        $widow->email = $request->input('email');
        $widow->Certificate = $Certificate; // Set the 'Certificate' field
        $widow->affidavit = $affidavit;
        $widow->guardian_name = $request->input('guardian_name');
        $widow->relationship = $request->input('relationship');
        $widow->guardian_contact = (int)$request->input('guardian_contact'); // Convert to integer
        $widow->kids = $request->input('kids'); // Assuming 'kids' is a field in your form
        $widow->form_b = $form_b;
        $widow->widow_district = $request->input('widow_district');
        $widow->widow_tehsil = $request->input('widow_tehsil');
        $widow->widow_village = $request->input('widow_village');

        $widow->save();

        return redirect('/')->with('success', 'Form submitted successfully');
    }



    // Edit form section

    public function edit($id)
    {
        $widows = Widow::where('id', $id)->first();
        return view('widows.edit', ['widows' => $widows]);
    }

    // update section

    public function update(Request $request, $id)
    {
        $request->validate([
            'widow_name' => 'required',
            'husband_name' => 'required',
            'widow_contact' => 'required|integer',
            'widow_nic' => 'required|integer',
            'husband_nic' => 'required|integer',
            'email' => 'required',
            'Certificate' => 'required', // Assuming this is a file upload field
            'affidavit' => 'required',   // Assuming this is a file upload field
            'guardian_name' => 'required',
            'relationship' => 'required',
            'guardian_contact' => 'required|integer',
            'kids' => 'required',
            'form_b' => 'required', // Assuming this is a file upload field
            'adress' => 'required',
        ]);

        // Find the Widow model by its ID
        $widow = Widow::find($id);


        // Handle file uploads for 'Certificate', 'affidavit', and 'form_b'
        if ($request->hasFile('Certificate')) {
            $certificateExtension = $request->file('Certificate')->extension();
            $Certificate = time() . '_certificate.' . $certificateExtension;
            $request->file('Certificate')->move(public_path('widows'), $Certificate);
            $widow->Certificate = $Certificate;
        }

        if ($request->hasFile('affidavit')) {
            $affidavitExtension = $request->file('affidavit')->extension();
            $affidavit = time() . '_affidavit.' . $affidavitExtension;
            $request->file('affidavit')->move(public_path('widows'), $affidavit);
            $widow->affidavit = $affidavit;
        }

        if ($request->hasFile('form_b')) {
            $formBExtension = $request->file('form_b')->extension();
            $form_b = time() . '_form_b.' . $formBExtension;
            $request->file('form_b')->move(public_path('widows'), $form_b);
            $widow->form_b = $form_b;
        }

        // Update other fields
        $widow->widow_name = $request->input('widow_name');
        $widow->husband_name = $request->input('husband_name');
        $widow->widow_contact = (int)$request->input('widow_contact');
        $widow->widow_nic = $request->input('widow_nic');
        $widow->husband_nic = $request->input('husband_nic');
        $widow->email = $request->input('email');
        $widow->guardian_name = $request->input('guardian_name');
        $widow->relationship = $request->input('relationship');
        $widow->guardian_contact = (int)$request->input('guardian_contact');
        $widow->kids = $request->input('kids');
        $widow->adress = $request->input('adress');

        $widow->save();

        return back()->withSuccess('success', 'Form is updated');
    }


    // delete widow record

    public function destroy($id)
    {
        $widows = Widow::where('id', $id)->first();

        // Get the file names associated with the record
        $certificateFilename = $widows->Certificate;
        $affidavitFilename = $widows->affidavit;
        $formBFilename = $widows->form_b;

        // Delete the associated image files from the file system
        if ($certificateFilename) {
            $certificatePath = public_path('widows/' . $certificateFilename);
            if (file_exists($certificatePath)) {
                unlink($certificatePath);
            }
        }

        if ($affidavitFilename) {
            $affidavitPath = public_path('widows/' . $affidavitFilename);
            if (file_exists($affidavitPath)) {
                unlink($affidavitPath);
            }
        }

        if ($formBFilename) {
            $formBPath = public_path('widows/' . $formBFilename);
            if (file_exists($formBPath)) {
                unlink($formBPath);
            }
        }
        $widows->delete();
        return back()->withSuccess('Form is delete');
    }

    // show widows record data

    public function show($id)
    {
        $widows = Widow::where('id', $id)->first();
        return view('widows.show', ['widows' => $widows]);
    }
}
