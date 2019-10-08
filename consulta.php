<?php 
include 'db.php';
$consul="SELECT nombre,apellidos FROM personas";
$result=$conex->query($consul);
while ($rel=$result->fetch_assoc()) {
	echo "<tr> 
	 <td>$rel[nombre]</td>
	 <td>$rel[apellidos]</td>
	 </tr>";
}
 ?>