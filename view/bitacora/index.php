<main class="app-content m-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Operacion</th>
      <th scope="col">Usuario</th>
      <th scope="col">Host</th>
      <th scope="col">Modificado</th>
      <th scope="col">Tabla</th>
    
    </tr>
  </thead>
  <tbody>
    <?php foreach($this->modelo->getBitacora() as $Bita): ?>
    <tr>
      <th scope="row"><?= $Bita->id?></th>
      <td><?= $Bita->operacion?></td>
      <td><?= $Bita->usuario?></td>
      <td><?= $Bita->host?></td>
      <td><?= $Bita->modificado?></td>
      <td><?= $Bita->tabla?></td>
      
    
    
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</main>