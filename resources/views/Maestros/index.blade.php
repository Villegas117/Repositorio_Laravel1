@extends('welcome')

@section('titulo', 'Ver Maestros')

@section('contenido')

@section('css')
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


<h1 class="my-3">INDEX de Maestros</h1>
<br>
<a href="Maestros/create" class="btn btn-primary">Crear</a>
<div class="table-responsive my-3">
    <table id="maestros" class="table mt-3">
        <thead class="table-dark">
            <tr>
                <th class="text-light" scope="col">ID</th>
                <th class="text-light" scope="col">Codigo</th>
                <th class="text-light" scope="col">Nombre</th>
                <th class="text-light" scope="col">Apellido Paterno</th>
                <th class="text-light" scope="col">Apellido Materno</th>
                <th class="text-light" scope="col">NSS</th>
                <th class="text-light" scope="col">Correo</th>
                <th class="text-light" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($maestros as $maestro)
                <tr>
                    <td>{{ $maestro->id }}</td>
                    <td>{{ $maestro->codigo }}</td>
                    <td>{{ $maestro->Nombre }}</td>
                    <td>{{ $maestro->App }}</td>
                    <td>{{ $maestro->Apm }}</td>
                    <td>{{ $maestro->nss }}</td>
                    <td>{{ $maestro->correo }}</td>
                    <td>
                        <a href="/maestros/{{ $maestro->id }}/edit" class="btn btn-warning"> Editar</a>
                        <form action="{{ route('maestros.destroy', $maestro->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> {{-- Es para lo de datatable --}}
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> {{-- Es para lo de datatable --}}
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> {{-- Es para lo de datatable --}}
    {{-- Es para lo de datatable y se pone el id de nuestra tabla --}}
    <script>
        $(document).ready(function() {
            $('#maestros').DataTable({
                language: {
                    "lengthMenu": "Mostrar MENU Registros",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando registros del START al END de un total de TOTAL registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de MAX registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing": "Procesando...",
                },
                responsive: "true",
            });
        });
    </script>
@endsection

@endsection
