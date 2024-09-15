<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
    <style>
        body {
            background: linear-gradient(to right, #a2c2e2, #e2eafc);
            color: #333; 
        }
        .btn-warning {
            background-color: #ffc107; 
            border-color: #ffc107; 
        }
        .btn-warning:hover {
            background-color: #e0a800; 
            border-color: #e0a800; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Appointment Booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Homepage</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                    <a href="{{ route('auth.login') }}" class="btn btn-primary ms-2">Login</a>
                    
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-4 p-4 bg-light bg-opacity-75 rounded">
        <h1 class="mb-4 text-primary text-center">Manage Appointments and Doctors</h1>
        <p class="fs-4">
          Experience Convenient and Personalized Care.

          Booking an appointment with our doctors ensures that you receive timely and personalized medical attention tailored to your unique needs. 
          By scheduling in advance, you avoid long wait times and ensure that you get the care you need when you need it. 
          This proactive approach not only helps in managing and preventing health issues more effectively but also allows for a more relaxed and thorough consultation. 
          Prioritize your health and well-being by securing your appointment today—your path to better health starts here.        </p>
        <p class="fs-4">
            With us, your health is our priority.        
          </p>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('appointments.index') }}" class="btn btn-warning btn-lg w-50 text-dark">Manage All</a>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
