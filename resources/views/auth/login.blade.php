

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(135deg, #a2c2e8, #f2f6fc); 
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.95); 
            padding: 3rem; 
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
            font-size: 1rem; 
        }
        .form-control::placeholder {
            font-size: 1rem; 
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
                        <a href="{{ route('auth.register') }}" class="btn btn-success">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
       
    </div>
    @endif
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form class="form-container rounded shadow border border-primary" action="{{route('auth.login')}}" method="POST">
            <h4 class="mb-5 text-primary text-center">Please login</h4>
            <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control border-primary form-control-lg" id="email" name="email" placeholder="Please enter your email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control border-primary form-control-lg" id="password" name="password" placeholder="Please enter your password" required>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary w-100 btn-lg">Submit</button>
        </form>
    </div>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

