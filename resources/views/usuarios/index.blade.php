@extends('layouts/contentNavbarLayout')

@section('title', 'Usuarios - Lista de Usuarios')

@section('content')

<!-- Bootstrap Table with Header - Footer -->
<div class="card">
  <h5 class="card-header d-flex justify-content-between align-items-center">
    Usuarios registrados
    <!-- Botón para registrar nuevo alineado a la derecha -->
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Registrar nuevo usuario</a>
  </h5>

  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Rol</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
          <td>{{ $usuario->id }}</td>
          <td>{{ $usuario->name }}</td>
          <td>{{ $usuario->email }}</td>
          <td>
            @if (!empty($usuario->getRoleNames()))
              @foreach ($usuario->getRoleNames() as $rolname)
                <label class="badge bg-success">{{ $rolname }}</label>
              @endforeach
            @endif
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('usuarios.edit', $usuario->id) }}"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
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
          <th>Nombre</th>
          <th>Email</th>
          <th>Rol</th>
          <th>Acciones</th>
        </tr>
      </tfoot>
    </table>
    <div class="pagination justify-content-end">
      {!! $usuarios->links() !!}
    </div>
  </div>
</div>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000,
            position: 'center'
        });
    </script>
@endif

@endsection
