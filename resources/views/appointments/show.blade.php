

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Appointment Details</title>
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Appointment Details</h2>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>Patient's Name:</th>
                    <td>{{$appointment->name}}</td>
                </tr>
                <tr>
                    <th>Appointment Date:</th>
                    <td>{{$appointment->appointment_date}}</td>
                </tr>
                <tr>
                    <th>Appointment Time:</th>
                    <td>{{$appointment->appointment_time}}</td>
                </tr>
                <tr>
                    <th>Appointment Type:</th>
                    <td>{{$appointment->appointment_type}}</td>
                </tr>
                <tr>
                    <th>Doctor:</th>
                    <td>{{$appointment->doctor->name}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
</body>
</html>
