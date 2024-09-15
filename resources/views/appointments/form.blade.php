<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>

<form class="container-sm" action="{{$action}}" method="POST" >
    
            
            <x-textfield name="name" label="Patient Name" type="text" :value="$appointment->name" placeholder="Enter your name" />
       
            <x-textfield name="appointment_date" :value="$appointment->appointment_date" label=" Appointment Date" type="date" placeholder="Enter appointment date" />
      

    <x-textfield name="appointment_time" :value="$appointment->appointment_time" label="Appointment Time" type="time" placeholder="Enter appointment time" />
    <x-textfield name="appointment_type" :value="$appointment->appointment_type" label="Appointment Type" type="text" placeholder="Enter appointment type" />

    <x-select-field :options="$doctors" name="doctor_id" label="Select Doctor" :value="$appointment->doctor_id"/>

   
    @csrf

    @isset($edit)
        @method('PATCH')
    @endisset
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



