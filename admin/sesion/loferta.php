<?php include("../vista/cabecera.php"); ?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "bdsitio") or
die("problemas con la conexion");

$registros = mysqli_query($conexion, "select ofe.codigo as codigo,
                                        nombreo,
                                        descu,
                                codigoprodu, foto,
                                        nombre
                                    from oferta as ofe
                                    inner join producto as pro on pro.codigo=ofe.codigoprod
  die("problemas en el select"": .  mysqli_error($conexion));
  ?>

  <table class="table table-striped table-bordered display" id="example">
    <thead>
     <tr>
       <th>Codigo</th>
       <th>% descuento</th>
       <th>Nombre del producto</th>
       <th>Foto del producto</th>
     </tr>
   </thead>
<tbody>
<?php
while ($reg = mysqli_fetch_array($registros)){ ?>
<tr>
            <td><?php echo $list['codigo'] ;?> </td>
            <td><?php echo $list['nombreo'] ;?></td>
            <td><?php echo $list['descu'] ;?> </td>
            <td><?php echo $list['nombre'] ;?> </td>
            <td>
                <img src="../../img/<?php  echo $list['foto']?>" alt="" width="100px" height="100px">
                <?php  echo $list['foto']?>
            </td>

</tr>
<?php } ?>
</tbody>
  </table>

  <script>
    $(document).ready(function()) {
        $('#example').Datatable();
    } );
    </script>
    <?php
    mysqli_close($conexion);
    ?>
    <?php include ("../vista/pie.php") ?>
  