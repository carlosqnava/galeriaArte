<?php
        if(isset($_SESSION['login'])){
          $login = $_SESSION['login'];
          $nombre = $_SESSION['nombre'];
          $id = $_SESSION['id'];
        }else{
          //header("?c=Exhibicion&a=FormAgregar");
        }
      ?>
<main class="app-content">

<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?></h3>
            <div class="tile-body">
              
                 <form class="form-horizontal" method="POST" action="view/exhibicion/guardar-exhibicion.php">
                <div class="form-group row">
                  <label class="control-label col-md-3">Id</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="idExhibicion" value="<?=$Ex->getidExhib()?>" placeholder="">
                  </div>
                </div>
      
                <div class="form-group row">
                  <label class="control-label col-md-3">Nombre</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nombreExhibicion" value="<?=$Ex->getnomExhib()?>" placeholder="">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-3">Fecha Comienzo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="fComienzo" value="<?=$Ex->getfechComienzo()?>" placeholder="yyyy-mm-dd">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-3">Fecha Fin</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="fFin" value="<?=$Ex->getfechaFin()?>" placeholder="yyyy-mm-dd">
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