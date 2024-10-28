@extends('layouts/contentNavbarLayout')

@section('title', 'Roles - Listado de Roles')

@section('content')

<!-- Page header -->
<div class="card">
  <h5 class="card-header d-flex justify-content-between align-items-center">
    Roles registrados
    <a href="{{ route('roles.create') }}" class="btn btn-primary">Crear nuevo rol</a>
  </h5>

  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Rol</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($roles as $rol)
        <tr>
          <td>{{ $rol->id }}</td>
          <td>{{ $rol->name }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('roles.edit', $rol->id) }}"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este rol?');">
                  @csrf
                  @method('DELETE')
                  <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i> Eliminar</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Rol</th>
          <th>Acciones</th>
        </tr>
      </tfoot>
    </table>
    <div class="pagination justify-content-end">
      {!! $roles->links() !!}
    </div>
  </div>
</div>

@endsection
