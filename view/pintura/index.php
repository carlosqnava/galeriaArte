


<main class="app-content m-3">
     
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Estilo</th>
                    <th scope="col">Material</th> 
                    <th>Acciones</th>
                  </tr>
                  <tbody>
                   <?php foreach($this->modelo->getPintura() as $Pin): ?>
                    <tr>
                        <th scope="row"><?= $Pin->idobj?></th>
                        <td><?= $Pin->tipoPint?></td>
                        <td><?= $Pin->estilPint?></td>
                        <td><?= $Pin->materialPint?></td> 
                        <td>
                          <a href="?c=pintura&a=FormAgregar&id=<?=$Pin->idobj?>" class="btn btn-info btn-flat">
                            <i class="fa fa-lg fa-refresh"></i>
                          </a>
                          <a  class="btn btn-warning btn-flat"

                              data-toggle="modal"
                              data-target="#exampleModal"
                              data-id="<?=$Pin->idobj?>">

                            <i class="fa fa-lg fa-trash"></i>
                          </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
<!--Modal-->
<div class="modal" tabindex="-1" id="exampleModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar pintura..</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Estas seguro de eliminar la pintura?</p>
        
        <input type="hidden" name="idmodal" id="idmodal">
      </div>
      <div class="modal-footer">
        <button type="button" id="btneliminar" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(function(){
    //se ejecuta cuando se muestra el modal
    $("#exampleModal").on('show.bs.modal', function(event){
      var idobj = $(event.relatedTarget).data('id');
      $('#idmodal').val(idobj);//asigna el id al campo oculto
    });
    //se ejecuta cuando se hace click al boton eliminar
    $('#btneliminar').on('click', function(event){
      var idobj = $("#idmodal").val();
      $('#exampleModal').modal('toggle');
      var url = "?c=pintura&a=Eliminar&id="+ idobj;
      $(location).attr('href',url);//redirigimos al controlador para eliminar el producto
    });
  })
</script>