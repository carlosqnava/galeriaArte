
<main class="app-content">

<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?></h3>
            <div class="tile-body">
                
                
                <form class="form-horizontal" method="POST" action="view/artista/guardar-artista.php">
                <div class="form-group row">
                  <label class="control-label col-md-3">Id</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="idartista" value="<?=$Arti->idobj ?? ''?>" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Nombre</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nombreartista" value="<?=$Arti->nomArt ?? ''?>" placeholder="">
                  </div>
                </div>
      
                <div class="form-group row">
                  <label class="control-label col-md-3">Fecha Nacimiento</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="fnaartista" value="<?=$Arti->fechNacArt ?? ''?>" placeholder="yyyy-mm-dd">
                  </div>
                </div>

                 <div class="form-group row">
                  <label class="control-label col-md-3">Fecha Defuncion</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="fdeartista" value="<?=$Arti->fechDefArt ?? ''?>" placeholder="yyyy-mm-dd">
                  </div>
                </div>



                <div class="form-group row">
                  <label class="control-label col-md-3">Epoca</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="epocaartista" value="<?=$Arti->epocArt ?? ''?>" placeholder="">
                  </div>
                </div>

            
                <div class="form-group row">
                  <label class="control-label col-md-3">Estilo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="estiloartista" value="<?=$Arti->estArt ?? ''?>" placeholder="">
                  </div>
                </div>

              
                <div class="form-group row">
                  <label class="control-label col-md-3">Pais</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="paisartista" value="<?=$Arti->paisArt ?? ''?>" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3 d-none">Accion</label>
                  <div class="col-md-8 d-none">
                    <input class="form-control d-none" type="text" name="accion" value="<?=$titulo?>" placeholder="">
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