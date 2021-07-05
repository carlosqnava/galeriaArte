
<?php
        if(isset($_SESSION['login'])){
          $login = $_SESSION['login'];
          $nombre = $_SESSION['nombre'];
          $id = $_SESSION['id'];
        }else{
          //header("location:?c=objetoarte");
        }
      ?>
<main class="app-content">

<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?></h3>
            <div class="tile-body">
                
              <form class="form-horizontal" method="POST" action="view/objetoArte/guardar-objetoarte.php">
                <div class="form-group row">
                  <label class="control-label col-md-3">ID</label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" name="IdArte" value="<?=$obArt->idobj ?? ''?>" placeholder="" required>
                  </div>
                </div>
      
                <div class="form-group row">
                  <label class="control-label col-md-3">Titulo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="TituloArte" value="<?=$obArt->titObj ?? ''?>" placeholder="" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Descripcion</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="DesArte" value="<?=$obArt->descObj ?? ''?>" placeholder="" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-3">Año</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="AñoArte" value="<?=$obArt->anioObj ?? ''?>" placeholder="yyyy-mm-dd" required>
                  </div>
                </div>

             
                <div class="form-group row">
                  <label class="control-label col-md-3">Pais</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="PaisArte" value="<?=$obArt->paisObj ?? ''?>" placeholder="" required>
                  </div>
                </div>

            
                <div class="form-group row">
                  <label class="control-label col-md-3">Epoca</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="EpocaArte" value="<?=$obArt->epocaObj ?? ''?>" placeholder="" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3 d-none">Accion</label>
                  <div class="col-md-8 d-none">
                    <input class="form-control d-none" type="text" name="accion" value="<?=$titulo?>" placeholder="" required>
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