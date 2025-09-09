@extends('layouts.app')

@section('content')
<section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login to your account</h2>

              @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
              @endif
              @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
              @endif

              <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter your username" value="{{ old('username') }}" required />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" required/>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

