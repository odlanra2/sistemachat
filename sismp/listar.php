<?php 
# Incluimos la configuracion
include('config.php'); 
session_start();
if($_SESSION['logueado'] != "SI"){
header('location: index.php');
exit();
}
# Buscamos los mensajes privados
$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario']."'";
$res = mysql_query($sql, $link) or die(mysql_error());
?>
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <a href="cerrar.php">Cerrar sesion</a><br /><br />
  <table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td width="53" align="center" valign="top"><strong>ID</strong></td>
      <td width="426" align="center" valign="top"><strong>Asunto</strong></td>
      <td width="321" align="center" valign="top"><strong>De</strong></td>
	  <td width="321" align="center" valign="top"><strong>Fecha</strong></td>
    </tr>
    <?php
	$i = 0; 
	while($row = mysql_fetch_assoc($res)){ ?>
    <tr bgcolor="<?php if($row['leido'] == "si") { echo "#FFE8E8"; } else { if($i%2==0) { echo "#FFE7CE"; } else { echo "#FFCAB0"; } } ?>">
      <td align="center" valign="top"><?=$row['ID']?></td>
      <td align="center" valign="top"><a href="leer.php?id=<?=$row['ID']?>"><?=$row['asunto']?></a></td>
      <td align="center" valign="top"><?=$row['de']?></td>
	  <td align="center" valign="top"><?=$row['fecha']?></td>
    </tr>
<?php $i++; 
} ?>
</table>