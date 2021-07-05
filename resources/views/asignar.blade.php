<!-- Modal -->
<form method="POST">
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @csrf
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
                        <label for="nombre" class="ui-contro lgroup-label">Nombre de la tarea</label>
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
