<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use App\Mail\WelcomeMessage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        $appointments = Appointment::simplePaginate(2);
        return view('appointments.index',['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $doctors = Doctor::all(['id','name'])->map(function ($doctor) {
            return [ 
                'value' => $doctor->id,
                'label' => $doctor->name
            ];
        });
    
        return view('appointments.create', [ 'doctors' => $doctors, 'appointment' => new Appointment ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = $this->getValidationRules();
        $data = $request->validate($validator['rules'],$validator['messages'],$validator['attributes']);

       

        Appointment::create($data); 
        Mail::to($appointment->mail)->send(appointmentWelcomeMessage($appointment));      
        return redirect()->route('appointments.index')->with('alertMessage'," {$data['name']} appointment booked successfully and email sent");

    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
        return view('appointments.show',compact('appointment'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
        $doctors = Doctor::all(['id','name'])->map(function ($doctor) {
            return [ 
                'value' => $doctor->id,
                'label' => $doctor->name
            ];
        });
    
        return view('appointments.edit', [  'appointment' => $appointment, 'doctors' => $doctors ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
        $validator = $this->getValidationRules($appointment->id);
        $data = $request->validate($validator['rules'],$validator['messages'],$validator['attributes']);
       
        $appointment->update($data);
        return redirect()->route('appointments.index')->with('alertMessage',"{$data['name']} appointment rescheduled successfully and email sent");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
        $appointment->delete();
        return redirect()->route('appointments.index')
        ->with('alertMessage'," {$appointment->name} deleted successfully")->with('type', 'success');

    }

    private function getValidationRules() {
        $rules = [
            'name' => 'required|string|min:3|max:50',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_type' => 'required|string|min:3|max:50',
            'doctor_id' => 'required|exists:doctors,id',

        ];

       
        $messages = [
             'doctor_id.required' => 'Please select a doctor',   
         ];
         $attributes = [
             'doctor_id' => 'doctor'
         ];
        return ['rules' => $rules, 'messages' => $messages,'attributes' => $attributes];
   }
}
