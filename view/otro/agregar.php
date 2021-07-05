<?php
        if(isset($_SESSION['login'])){
          $login = $_SESSION['login'];
          $nombre = $_SESSION['nombre'];
          $id = $_SESSION['id'];
        }else{
          //header("?c=Otro&a=FormAgregar");
        }
      ?>
<main class="app-content">

<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?></h3>
            <div class="tile-body">
                
              <form class="form-horizontal" method="POST" action="view/otro/guardar-otro.php">
                <div class="form-group row">
                  <label class="control-label col-md-3">Id</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="IdOtro" value="<?=$Otr->getidobj()?>" placeholder="">
                  </div>
                </div>
      
                <div class="form-group row">
                  <label class="control-label col-md-3">Tipo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="TipoOtro" value="<?=$Otr->gettipoOtro()?>" placeholder="">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-3">Estilo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="EstiloOtro" value="<?=$Otr->getestilOtro()?>" placeholder="">
                  </div>
                </div>


            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle">
                  </i><?=$titulo?></button>
                </div>
              </div>
            </div>
            </form>
          </div>
</div>

</main>    