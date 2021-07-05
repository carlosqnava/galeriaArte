
<?php
        if(isset($_SESSION['login'])){
          $login = $_SESSION['login'];
          $nombre = $_SESSION['nombre'];
          $id = $_SESSION['id'];
        }else{
          //header("location:?c=escultura");
        }
      ?>
<main class="app-content">
 
<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?></h3>
            <div class="tile-body">
                
              <form class="form-horizontal" method="POST" action="view/escultura/guardar-escultura.php">
                   <div class="form-group row">
                  <label class="control-label col-md-3">ID</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="idEscultura" value="<?=$Esc->getidobj()?>" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Estilo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="estiloEscultura" value="<?=$Esc->getestilEscul()?>" placeholder="">
                  </div>
                </div>
      
                <div class="form-group row">
                  <label class="control-label col-md-3">Material</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="materialEscultura" value="<?=$Esc->getmaterialEscul()?>" placeholder="">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-3">Altura</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="alturaEscultura" value="<?=$Esc->getalturaEscul()?>" placeholder="">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-3">Peso</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="pesoEscultura" value="<?=$Esc->getpesoEscul()?>" placeholder="">
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