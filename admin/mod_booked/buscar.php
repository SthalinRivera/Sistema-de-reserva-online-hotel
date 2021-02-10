<?php 

require_once("db.php");
$tabla="";
$query="SELECT * FROM `tblguest` ";

if(isset($_POST['guest']))
{
	$q=$conn->real_escape_string($_POST['guest']);
	$query="SELECT * FROM tblguest WHERE 
		GUESTID LIKE '%".$q."%' OR
		G_FNAME LIKE '%".$q."%' OR
		G_LNAME LIKE '%".$q."%' OR
		G_EMAIL LIKE '%".$q."%' ";
		
}
            $buscarHuesped=$conn->query($query);
            if ($buscarHuesped->num_rows > 0)
            {
                $tabla.= 
                '
                <table class="table">
                    <tr class="bg-primary">
                        <td>ID </td>
                        <td>G_FNAME</td>
                        <td>G_LNAME</td>
                        <td>G_EMAIL</td>
                   
                    </tr>';

                while($filaHuesped= $buscarHuesped->fetch_assoc())
                {
                    $tabla.=
                    '<tr>
                        <td>'.$filaHuesped['GUESTID'].'</td>
                        <td>'.$filaHuesped['G_FNAME'].'</td>
                        <td>'.$filaHuesped['G_LNAME'].'</td>
                        <td>'.$filaHuesped['G_EMAIL'].'</td>
                        
                    ';
                }

                $tabla.='</table>';
            } else
                {
                    $tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
                }
            echo $tabla;
            ?>





