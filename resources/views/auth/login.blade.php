<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">APPOINTMENT BOOKING</a>
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
    <form class="container-sm mt-4" action="{{route('auth.login')}}" method="POST">
        <h4 class="mb-3">Please login</h1>
        <x-textfield type="email" name="email" label="Email Address" placeholder="Please enter your email" />
        <x-textfield type="password" name="password" label="Password" placeholder="Please enter your password" />

         @csrf 
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html> --}}

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
            background: linear-gradient(135deg, #a2c2e8, #f2f6fc); /* Soft blue gradient background */
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.95); /* White background with 95% opacity */
            padding: 3rem; /* Increased padding */
            border-radius: 0.375rem; /* Rounded corners */
            max-width: 700px; /* Increased width */
            margin: auto; /* Center the form */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        .btn-primary {
            background-color: #007bff; /* Bright blue button color */
            border-color: #007bff; /* Matching border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #004085; /* Darker border color on hover */
        }
        .form-control {
            font-size: 1rem; /* Larger input text size */
        }
        .form-control::placeholder {
            font-size: 1rem; /* Larger placeholder text size */
        }
    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">APPOINTMENT BOOKING</a>
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
</body>
</html>

