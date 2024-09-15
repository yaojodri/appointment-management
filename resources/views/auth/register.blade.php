

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Register</title>
    <style>
        body {
            background: linear-gradient(135deg, #a2c2e8, #f2f6fc); 
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.95); 
            padding: 2rem; 
            border-radius: 0.375rem; 
            max-width: 700px; 
            margin: auto; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff; 
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; 
            border-color: #004085; 
        }
        .form-control {
            font-size: 0.875rem; 
        }
        .form-control::placeholder {
            font-size: 0.875rem; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">APPOINTMENT MANAGEMENT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Homepage</a>
                    <div class="ms-auto">
                        <a href="{{ route('auth.login') }}" class="btn btn-primary ms-2">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
   
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form class="form-container p-5 rounded shadow border border-primary" action="{{route('register')}}" method="POST">
            <h4 class="mb-4 text-primary text-center">Please register</h4>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">User Name</label>
                        <input type="text" class="form-control border-primary form-control-lg" id="name" name="name" placeholder="Enter a user name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="email" class="form-label">User Email</label>
                        <input type="email" class="form-control border-primary form-control-lg" id="email" name="email" placeholder="Enter a user email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="password" class="form-label">User Password</label>
                        <input type="password" class="form-control border-primary form-control-lg" id="password" name="password" placeholder="Enter a user password" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control border-primary form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                    </div>
                </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary w-100 btn-lg">Register</button>
        </form>
    </div>
</body>
</html>
