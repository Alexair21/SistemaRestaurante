@extends('layouts/contentNavbarLayout')

@section('title', 'Edición de Usuario')

@section('content')

<div class="row justify-content-center">
  <div class="col-xl-8">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edición de Usuario</h5>
        <small class="text-muted float-end">Modifique la información del usuario</small>
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

        <form method="POST" action="{{ route('usuarios.update', $user->id) }}" autocomplete="off">
          @csrf
          @method('PUT')

          <!-- Información del Usuario -->
          <div class="mb-3">
            <label class="form-label" for="name">Nombre <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name', $user->name) }}" />
          </div>

          <div class="mb-3">
            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}" />
          </div>

          <!-- Contraseña y Confirmación de Contraseña -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label" for="password">Contraseña <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="password_confirmation">Confirmar Contraseña <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña" />
            </div>
          </div>

          <!-- Selección de Roles -->
          <div class="mb-3">
            <label class="form-label" for="roles">Rol <span class="text-danger">*</span></label>
            <select id="roles" name="roles[]" class="form-control" multiple>
              @foreach($roles as $role)
                <option value="{{ $role }}" {{ in_array($role, $userRoles) ? 'selected' : '' }}>{{ $role }}</option>
              @endforeach
            </select>
          </div>

          <!-- Botón para enviar el formulario -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
