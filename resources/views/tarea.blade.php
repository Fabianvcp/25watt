@extends('adminlte::page')

@section('title', 'Consultas')
@section('plugins.Datatables', true)
@section('content_header')
    <h1>Listados <small>de Tareas</small></h1>
@stop

@section('content')

    <div class="col-12">
        <a href="{{ route('create') }}" class="btn btn-secondary text-center mb-3" >
            Registrar tarea
        </a>

        <div class="card card text-white bg-dark ">
            <div class="card-header">
                <h3 class="card-title">Listados de Tareas</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body  container-fluid" >
                <table id="users-table" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de modificación</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $tareas as $tarea)
                        <tr class="text-white bg-secondary" style="max-width: 100%">
                        <td>{{ $tarea->id }}</td>
                        <td>{{ $tarea->tarea }}</td>
                        <td>{{ Carbon\Carbon::parse($tarea->create_at)->format('d-m-Y H:i') }}</td>
                            <td>{{ Carbon\Carbon::parse($tarea->update_at)->format('d-m-Y H:i') }}</td>
                        <td>
                            <button type="button" class="btn btn-outline-light btn-primary tooltip-test" title="ver tarea" data-toggle="modal" data-target="#staticBackdrop1" data-id="{{$tarea->id }}" data-tarea="{{ $tarea->tarea}}" ><i class="fas fa-people-arrows"></i> </button>
                              <button type="button" class="btn btn-outline-light btn-primary tooltip-test" title="editar tarea" data-toggle="modal" data-target="#staticBackdrop" data-id="{{$tarea->id }}" data-tarea="{{$tarea->tarea}}" ><i class="fas fa-edit"></i> </button>
                                    <form method="POST" action="{{ route('destroy',  $tarea->id) }}" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id_cliente" value="{{ $tarea->id}}">
                                        <button class="btn btn-outline-light btn-danger" title="Eliminar Tarea" onclick="return confirm('¿Estas seguro de eliminar {{  $tarea->tarea }}?')"><i class="far fa-trash-alt"></i></button>
                                    </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

                <h3 class="card-title"> un boton con el signo <i class="fa fa-plus fa-xs bg-blue border-light" style="border-radius: 44%;border: 2px solid;"></i> en la primera columna, indica que hay más contenido del que se ve, presione el boton podran ver el contenido oculto</h3>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <form method="POST">
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            @csrf
            @method('PUT')
            <div class="modal-dialog">
                <div class="modal-content bg-gradient-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Editar Tarea</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="input" class="ui-contro lgroup-label">Nombre de la tarea</label>
                            <input type="text" name="input" id="input" class="form-control">
                            <input type="hidden" name="id" id="id" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="BtnEnviar">Guardar Cambio</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- Modal -->

    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content bg-gradient-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ver Tarea</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre" class="ui-contro lgroup-label">Nombre de la tarea</label>
                        <input type="text" name="input" id="input" class="form-control" readonly>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

@stop

@section('footer')
    <!-- Default to the left -->
    <strong class="text-center">Copyright &copy; 2021.</strong> All rights reserved.
@stop


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    @toastr_css
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" ></script>
    <script>
        $('#users-table').DataTable({
            "responsive": true,
            "paging": true,
            "pagingType": "simple",
            "searching": true,
            "lengthChange": true,
            "ordering": true,
            "info": false,
            "autoWidth": true,
            "language": {
                "url": '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            "columnDefs": [
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 2, targets: -1 }
            ]

        });
        $('#staticBackdrop1').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget) // Botón que activó el modal
            let id = button.data('id') // Extraer la información de atributos de datos
            let tarea = button.data('tarea') // Extraer la información de atributos de datos

            let modal = $(this)
            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #input').val(tarea)
            $('.alert').hide();//Oculto alert
        });
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
            });
        });



        $('#staticBackdrop').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget) // Botón que activó el modal
            let id = button.data('id') // Extraer la información de atributos de datos
            let tarea = button.data('tarea') // Extraer la información de atributos de datos

            let modal = $(this)
            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #input').val(tarea)
            $('.alert').hide();//Oculto alert
        });
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
            });
        });
        $("#BtnEnviar").click(function (e) {
            e.preventDefault();
            let id = $('#id').val();
            let tarea = $('#input').val();
            let _token =$('meta[name=csrf-token]').attr('content');

            $.ajax({
                url: '/'+ id,
                type: 'PUT',
                data: {
                    id:id,
                    tarea:tarea,
                    _token:_token,
                },
                success:(res)=>{
                    if(res.status===true){
                        toastr.info('Validation true!', 'se pudo Modificar los datos <br>', {timeOut: 5000});
                        location.reload();
                    }else{
                        toastr.info('Validation true!', 'Algo salio mal<br>', {timeOut: 5000});
                        location.reload();
                    }
                },
                error: function(jqXHR, text, error){
                    toastr.error('Validation error!', tarea+' No se pudo Modificar los datos<br>' + error, {timeOut: 5000});
                }
            }).done(function (res) {

            });
        });
    </script>
    @jquery
    @toastr_js
    @toastr_render
@stop
