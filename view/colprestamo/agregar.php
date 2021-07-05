
<?php
        if(isset($_SESSION['login'])){
          $login = $_SESSION['login'];
          $nombre = $_SESSION['nombre'];
          $id = $_SESSION['id'];
        }else{
          //header("location:?c=colprestamo");
        }
      ?>
<main class="app-content">
 
<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?></h3>
            <div class="tile-body">
               
                        <form class="form-horizontal" method="POST" action="view/colprestamo/guardar-colprestamo.php">
                  <div class="form-group row">
                  <label class="control-label col-md-3">ID</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="IdColPrestamo" value="<?=$colpres->getidobj()?>" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Informacion</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="Informacion" value="<?=$colpres->getinfPrest()?>" placeholder="">
                  </div>
                </div>
      
                <div class="form-group row">
                  <label class="control-label col-md-3">Fecha Peticion</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="FPrestamo" value="<?=$colpres->getfechPet()?>" placeholder="yyyy-mm-dd">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-3">Fecha Devolucion</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="Fdevolucion" value="<?=$colpres->getfechDev()?>" placeholder="yyyy-mm-dd">
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