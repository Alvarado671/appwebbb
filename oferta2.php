<?php  include("vista/cabecera.php");?>
<?php include("admin/config/conexion.php");
$registros = mysqli_query($conexion, "select ofe.codigo as codigo,
                                              nombreo,
                                              descu,
                                            codigoprodu, foto,
                                              nombre
                                         from oferta as ofe
                                         inner join producto as pro on pro.codigo=ofe.codigoprod
die("problemas en el select: mysqli_error($conexion));
?>
<?php   while ($list = mysqli_fetch_array($registros)) { ?>
    <div class="col-md-6">
        <br><br>
        <div class="card">
            <h4 style="text-align:center; font: size 40px;" class="card-title"><?php echo $list['nombreo']?></h4>
            <img class="card-img-top" src="img/<?php echo $list['foto']?>" alt="" width="200px" height="400px">

        </div>

    </div>

 



<?php  include("vista/pie.php");?>