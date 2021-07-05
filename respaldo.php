<?php

$listar= null;
$directorio = opendir('BACKUP_DIR/');
while($elemento=  readdir($directorio))
{
    if($elemento != '.' && $elemento !='..')//elimina las subcarpetas superiores
    {
    if(is_dir("BACKUP_DIR/".$elemento))//muestra las subcarpetas inferiores
    {
        $listar.= "<li><a href ='BACKUP_DIR/$elemento' target='_blank'>$elemento/</a></li>";
    }
    else//muestra los archivos
    {
        $listar.= "<li><a $elemento target='_blank'>$elemento</a></li>";
        //$listar.= "<li><a href ='BACKUP_DIR/$elemento' target='_blank'>$elemento</a></li>";
    }
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    
    <body>
        <h1> Opciones de recuperacion y respaldo</h1>
        
        <a class="nav-link" href="myphp-backup.php">Hacer respaldo <span class="sr-only">(current)</span></a>
        <br>
        <a class="nav-link" href="myphp-restore.php">Restaurar de archivo <span class="sr-only">(current)</span></a>
        
        <h3>  Respaldos guardados </h3>
        
        <ul>
            <?php echo $listar ?>
        </ul>
        
    </body>
</html>


<main class="app-content">
 
<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Respaldos guardados</h3>
            <div class="tile-body">
                <p> 
                Selecciona el nombre del archivo con el cursor del raton, click derecho en copiar y pegar en la casilla. 
                </p>
                <form class="form-horizontal" method="POST" action="myphp-restore.php">
                <div class="form-group row">
                  <label class="control-label col-md-3">Direccion del archivo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="dirArchivoRestore" placeholder="Pegar direccion aqui">
                  </div>
                </div>
      
                
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle">
                  </i>Restore</button>
                </div>
              </div>
            </div>
            </form>
                
                
                
          </div>
</div>

</main>    