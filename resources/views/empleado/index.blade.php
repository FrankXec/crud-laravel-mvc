<a href="{{ url('empleado/create') }}">Registrar Nuevo Empleado</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td> {{ $empleado->id }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" />
            </td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                    Editar
                </a>

                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" value="Borrar" onclick="return confirm('Quieres borrar?')" />
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
        </tr>
    </tfoot>
</table>