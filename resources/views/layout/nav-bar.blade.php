{{-- <div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>

{{-- <div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
    --}}
      
      <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MANAGE APPOINTMENTS </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Homepage</a>
              <a class="nav-link" href="{{route('appointments.index')}}">Appointments</a>
              <a class="nav-link" href="{{route('doctors.index')}}">Doctors</a>

              @if(Auth::user()->isSuperAdmin())
              <a class="nav-link" href="{{route('users.index')}}">Users</a>
              @endif
    
              @auth
              <form action="{{route('auth.logout')}}" method="post">
                @csrf
                <button class="btn btn-success" type="submit">Logout</button>
              </form>
              @endauth
    
            </div>
          </div>
        </div>
      </nav>
    