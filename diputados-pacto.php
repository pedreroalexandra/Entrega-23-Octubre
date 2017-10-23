<?php include('header.php')?>

<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">
<?php
$csv = array_map('str_getcsv', file('data/eleccion_diputados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
<?php $lafuerza = 0; $union = 0; $portodo = 0; $frenteamplio = 0; $convergencia = 0; $sumemos= 0; $vamos = 0; $independiente = 0; $coalicion = 0; $trabajadores = 0;?>

<h3>La fuerza de la Mayoria</h3>
<hr>
      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                    <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $lafuerza++;?> 
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Unión Patriótica</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $union++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Por Todo Chile</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $portodo++;?> 
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Frente Amplio</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $frenteamplio++;?> 
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Convergencia Democrática</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $convergencia++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Sumemos</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $sumemos++;?> 
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Chile Vamos</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $vamos++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Independiente</h3>
<hr>
      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $independiente++;?> 
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Coalición Regionalista Verde</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $coalicion++;?> 
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<h3>Trabajadores Revolucionarios</h3>
<hr>

      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                    <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                  <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                <tr>
                    <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
 
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                     <td><?php echo($csv[$a]["Comunas"])?></td>
                   
                    </td>   
             </tr>
                <?php $trabajadores++;?> 
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

<div class="alert alert-danger">        
<h5>Los candidatos de La fuerza de la Mayoría son <?php print $lafuerza;?></h5>
<h5>Los candidatos de la Unión Patriótica son <?php print $union;?></h5>
<h5>Los candidatos del Por todo Chile son <?php print $portodo;?></h5>
<h5>Los candidatos del Frente Amplio son <?php print $frenteamplio;?></h5>
<h5>Los candidatos del Convergencia Democrática son <?php print $convergencia;?></h5>
<h5>Los candidatos de Sumemos son <?php print $sumemos;?></h5>
<h5>Los candidatos de Chile Vamos son <?php print $vamos;?></h5>
<h5>Los candidatos del Independiente son <?php print $independiente;?></h5>
<h5>Los candidatos del Coalición Regionalista Verde son <?php print $coalicion;?></h5>
<h5>Los candidatos del Trabajadores Revolucionarios son <?php print $trabajadores;?></h5>



</div>



</div>
</div>
</div>
<?php include('footer.php')?>