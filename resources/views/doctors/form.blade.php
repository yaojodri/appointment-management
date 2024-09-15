

<form class="container-sm" action="{{$action}}" method="POST" enctype="multipart/form-data">
    <div class="row g-3">
        <div class=>
            
            <x-textfield name="name" label="Doctor's Name" type="text" :value="$doctor->name" placeholder="Enter Doctor's Name" />
        </div>
        <div class=>
            <x-textfield name="specialization" :value="$doctor->specialization" label="Specialization" type="text" placeholder="Enter Doctor's Specialty" />
        </div>
    </div>   
    
    <x-textfield name="phone_number" :value="$doctor->phone_number" label="Doctor's Phonenumber" type="tel" placeholder="Enter Doctor's Phonenumber" />
    
    <x-textfield name="email" label="Doctor's Email" :value="$doctor->email" type="email" placeholder="Enter Doctor's Email" />

    @csrf

    @isset($edit)
        @method('PATCH')
    @endisset
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
</form>

