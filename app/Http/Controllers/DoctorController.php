<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Mail\DoctorMail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctors = Doctor::simplePaginate(4);
       return view('doctors.index',['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('doctors.create', [ 'doctor' => new Doctor ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $this->getValidationRules();
        $data = $request->validate($validator['rules']);

       

        $doctor =  Doctor::create($data); 
         Mail::to($doctor->email)->send(new DoctorMail($doctor));      
        return redirect()->route('doctors.index')->with('alertMessage'," {$data['name']} added successfully and email sent");


    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
        return view('doctors.show',compact('doctor'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
        return view('doctors.edit',[ "doctor" => $doctor ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
        $validator = $this->getValidationRules($doctor->id);
        $data = $request->validate($validator['rules']);
       
        $doctor->update($data);
        return redirect()->route('doctors.index')->with('alertMessage',"{$data['name']} edited successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
        $doctor->delete();
        return redirect()->route('doctors.index')
        ->with('alertMessage'," {$doctor->name} deleted successfully")->with('type', 'success');

    }


    private function getValidationRules() {
        $rules = [
            'name' => 'required|string|min:3|max:50',
            'specialization' => 'required|string|min:3|max:100',
            'phone_number' => 'required|numeric',
            'email' => ['required','email','max:150','unique:doctors'],
        ];

       
        return ['rules' => $rules];
   }

}
