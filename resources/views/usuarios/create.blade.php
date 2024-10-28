@extends('layouts/contentNavbarLayout')

@section('title', 'Creación de Usuario')

@section('content')
<div class="row justify-content-center">
  <div class="col-xl-8">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Creación de Usuario</h5>
        <small class="text-muted float-end">Ingrese los datos requeridos</small>
      </div>

      <div class="card-body">
        <!-- Mostrar mensajes de error -->
        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>¡Revise los campos!</strong>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="{{ route('usuarios.store') }}" autocomplete="off">
          @csrf

          <!-- Agrupar Nombre y Apellido en una fila -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label" for="name">Nombre</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="last_name">Apellido</label>
              <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Apellido" />
            </div>
          </div>

          <!-- Campo para Email -->
          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="example@example.com" />
          </div>

          <!-- Agrupar Contraseña y Confirmación de Contraseña en una fila -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label" for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña" />
            </div>
          </div>

          <!-- Selección de roles -->
          <div class="mb-3">
            <label class="form-label" for="roles">Rol</label>
            <select name="roles[]" class="form-control" multiple>
              @foreach($roles as $role)
                <option value="{{ $role }}">{{ $role }}</option>
              @endforeach
            </select>
          </div>

          <!-- Botón para enviar el formulario -->
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
