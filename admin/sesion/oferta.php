<?php include("../vista/cabecera.php"); ?>
<?php 
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$nombreo=(isset($_POST['nombreo']))?$_POST['nombreo']:"";
$descu=(isset($_POST['descu']))?$_POST['descu']:"";
$codigoprodu=(isset($_POST['codigoprodu']))?$_POST['codigoprodu']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/conexion.php");


switch ($accion) {
        case 'agregar':
          
        
            $result = $conn->query("INSERT INTO `oferta` (`codigo`, `nombreo`, `descu`, `codigoprodu`) VALUES (NULL, '$nombreo', '$descu', '$codigoprodu');");
          
            
        break;

        case 'modificar':

        
           /* $result = $conn->query(" UPDATE oferta SET `nombre`='$nombre',`foto`='$foto',`precio`='$precio' WHERE codigo=$codigo");
        break;

        case 'Borrar':

            $result=$conn->query("DELETE FROM producto WHERE codigo=$codigo");
          
                
            
                        
        break;*/

        case 'borrar':
            $result=$conn->query("DELETE FROM oferta WHERE codigo=$codigo");
        break;

        case 'eliminar':
            header("location:oferta.php");
           
            
        break;
    
                
     
    
 
}
$result = ("SELECT * FROM oferta");

?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Formulario de Registro de Ofertas
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Codigo</label>
                        <input type="text" required readonly name="codigo" id="codigo"  value="<?php echo $codigo ?>" class="form-control" placeholder="Digite codigo">
                        
                     </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text"  name="nombreo" id ="nombreo" value="<?php echo $nombreo ?>" class="form-control" placeholder="Digite Nombre del producto">
                    </div>
                    <div class="form-group">
                        <label>% Descuento</label>
                        <input type="text" name="descu" id ="descu" value="<?php echo $descu ?>" class="form-control" placeholder="Descuento">
                    </div>
                    <div class="form-group">
                <select name="codigoprodu" class="form-control"></select>
                    </div>
                   
                    <?php
                    // require(../config/conexion.php);

                    //$conexion = retornarConexion();
                    include("../config/conexion.php");

                    $registros = mysqli_query($conn, "select codigo,nombre,foto from producto") or
                    die("problemas en el select:" . mysqli_error($conexion));
                    while ($reg = mysqli_fetch_array($registros)) {
                    
                        echo "<option value=\"$reg[codigo]\">$reg[nombre]</option>";
                    }
                    ?>
                </select>
                <br>
                </div>
                    

                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" value="agregar" class="btn btn-success">Registro</button>
                        <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                        <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Cancelar</button>
                    </div>               
                  
                </form>
        </div>
        
    </div>
            
    
</div>
<div class="col-md-7">
<table class="table table-striped table-bordered display" id="example">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre de la oferta</th>
            <th>% descuento</th>
            <th>codigo del producto</th>
            <th>nombre del producto</th>
            <th>imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($conn->query($result) as $list){ ?>
        <tr>
            <td><?php echo $list['codigo']?> </td>
            <td><?php  echo $list['nombreo']?></td>
            <td><?php echo $list['descu']?> </td>
            <td><?php echo $list['codigoprodu']?> </td>
            <td><?php echo $list['nombre']?> </td>
            <td>
                <img src="../../img/<?php  echo $list['foto']?>" alt="" width="140px" height="100px">
                <?php  echo $list['foto']?>
            </td>
            <td> <form method="post">
                <input type="hidden" name="codigo" id="codigo" value="<?php echo $list['codigo']?> ">
              <input type="submit" name="accion" value="seleccionar" class="btn btn-success">
                <input type="submit" name="accion" value="Borrar" class="btn btn-danger">
            </form> </td>
        </tr>
       <?php } ?>
    </tbody>
</table>    

</div>

<?php include("../vista/pie.php"); ?>