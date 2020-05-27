<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="database/update.php" method="POST">
      <div class="modal-body">
        <input id="edit-id" name="id" type="hidden" value="">
        <div class="form-group">
            <input id="edit-title" type="text" name="title" class="form-control" placeholder="Titulo" required>
        </div>
        <div class="form-group">
            <textarea id="edit-description" name="description" rows="2" class="form-control" placeholder="Descripcion" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary" name="update" value="Guardar cambios">
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="database/delete.php" method="POST">
      <div class="modal-body">
        <input id="delete-id" name="id" type="hidden" value="">
        <p>¿Esta seguro que desea eliminar a <span id="delete-title"></span> de la lista?</p>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-danger" name="delete" value="Si">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>