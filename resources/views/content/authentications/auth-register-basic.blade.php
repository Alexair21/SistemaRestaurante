@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register Card -->
      <div class="card px-sm-6 px-0">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{ url('/') }}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="{{ asset('icon.png') }}" alt="Logo" width="280">
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-1">Ingresa tus datos 🚀</h4>

          <form id="formAuthentication" class="mb-6" action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="username" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu nombre completo" required autofocus>
            </div>
            <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email" required>
            </div>
            <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
            <button class="btn btn-primary d-grid w-100" type="submit">
                Inicia sesión
            </button>
        </form>


          <p class="text-center">
            <span>¿Ya tienes una cuenta?</span>
            <a href="{{url('auth/login-basic')}}">
              <span>Ve al login</span>
            </a>
          </p>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
@endsection
