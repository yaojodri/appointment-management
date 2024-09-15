<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>

    {{-- <div class="row g-3">
        <div class=>
            <label>Doctor's Name:</label>
            <p>
                {{$doctor->name}}
            </p>
        </div>
        <div class=>
            <label>Specialization:</label>
            <p>
                {{$doctor->specialization}}
            </p>
        </div>
      
    <div>
        <label>Phone Number:</label>
        <p>
            {{$doctor->phone_number}}
        </p>
    </div>
    <div>
        <label>Email:</label>
        <p>
            {{$doctor->email}}
        </p>
    </div>
   
 --}}

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Doctor Details</title>
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Doctor Details</h2>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>Doctor's Name:</th>
                    <td>{{$doctor->name}}</td>
                </tr>
                <tr>
                    <th>Specialization:</th>
                    <td>{{$doctor->specialization}}</td>
                </tr>
                <tr>
                    <th>Phone Number:</th>
                    <td>{{$doctor->phone_number}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{$doctor->email}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
</body>
</html>
