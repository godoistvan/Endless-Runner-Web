@extends('layouts.app')

@section('content')
<section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
              @endif

              <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter your username" value="{{ old('username') }}" required/>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your Email" value="{{ old('email') }}" required/>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" required/>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Repeat your password" required/>
                </div>
                <div class="form-check d-flex justify mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="1" name="accepted" required/>
                  <label class="form-check-label content-center">I agree to the <u>Terms of service</u></label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="{{ route('login.show') }}" class="fw-bold text-body"><u>Login here</u></a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

