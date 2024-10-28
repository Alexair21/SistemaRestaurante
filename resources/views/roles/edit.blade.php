@extends('layouts/contentNavbarLayout')

@section('title', 'Editar Rol')

@section('content')

<div class="row justify-content-center">
  <div class="col-xl-8">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Editar Rol</h5>
        <small class="text-muted float-end">Modifique los datos del rol</small>
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

        <form method="POST" action="{{ route('roles.update', $role->id) }}" autocomplete="off">
          @csrf
          @method('PUT')

          <!-- Campo para Nombre del Rol -->
          <div class="mb-3">
            <label class="form-label" for="name">Nombre del Rol <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del Rol" value="{{ old('name', $role->name) }}" />
          </div>

          <!-- Selección de Permisos -->
          <div class="mb-3">
            <label class="form-label" for="permissions">Permisos para este Rol <span class="text-danger">*</span></label>
            <div class="form-check">
              @foreach ($permissions as $value)
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $value->id }}" id="permission{{ $value->id }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                  <label class="form-check-label" for="permission{{ $value->id }}">{{ $value->name }}</label>
                </div>
                <br>
                @if (in_array($value->id, [1, 5, 9, 13, 17, 21, 27, 33]))
                  <hr>
                @endif
              @endforeach
            </div>
          </div>

          <!-- Botón para enviar el formulario -->
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
