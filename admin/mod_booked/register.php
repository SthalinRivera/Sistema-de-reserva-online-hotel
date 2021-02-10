<?php 
require_once("db.php");
//Generar codifo deconfirmacion
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
$codigoConfirmacion=  generate_string($permitted_chars, 8);


//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["ARRIVAL"])  and $_POST["ARRIVAL"] !=""  ){

//traspasamos a variables locales, para evitar complicaciones con las comillas:

$CONFIRMATIONCODE =$codigoConfirmacion ;
$TRANSDATE = date("Y-m-d");  
$ROOMID = $_POST["ROOMID"];
$ARRIVAL = $_POST["ARRIVAL"];
$DEPARTURE = $_POST["DEPARTURE"];
$RPRICE = $_POST["RPRICE"];
$GUESTID = $_POST["GUESTID"];
$PRORPOSE = $_POST["PRORPOSE"];
$STATUS = "Pending";
$BOOKDATE = date("Y-m-d H:i:s");  
$REMARKS = "";
$USERID = 0;

//sumar dias para multiplicar por nooche el precio
$fecha1= new DateTime($ARRIVAL);
$fecha2= new DateTime($DEPARTURE);
$diff = $fecha1->diff($fecha2);
$totalPrecio=$diff->days*$RPRICE;
$SPRICE = $totalPrecio;
$totalHabitacion=1;
$PQTY = $totalHabitacion;
$totalMsgview=1;
$MSGVIEW=$totalMsgview;
//Preparamos la orden SQL
$insertReservation="INSERT INTO `tblreservation` (`RESERVEID`, `CONFIRMATIONCODE`, `TRANSDATE`, `ROOMID`, `ARRIVAL`, `DEPARTURE`, `RPRICE`, `GUESTID`, `PRORPOSE`, `STATUS`, `BOOKDATE`, `REMARKS`, `USERID`) 
VALUES (NULL, '$CONFIRMATIONCODE', '$TRANSDATE', '$ROOMID', '$ARRIVAL', '$DEPARTURE', '$RPRICE ', '$GUESTID', '$PRORPOSE', '$STATUS', '$BOOKDATE', '$REMARKS', '$USERID ')";
//Preparamos la orden SQL
mysqli_query($conn, $insertReservation);
$insertPayment="INSERT INTO `tblpayment` (`SUMMARYID`, `TRANSDATE`, `CONFIRMATIONCODE`, `PQTY`, `GUESTID`, `SPRICE`, `MSGVIEW`, `STATUS`) 
VALUES (NULL, '$TRANSDATE', '$CONFIRMATIONCODE', '$PQTY', '$GUESTID', '$SPRICE', '$MSGVIEW', '$STATUS')";
mysqli_query($conn, $insertPayment);

//Aqui ejecutaremos esa orden

echo '<script language="javascript">alert("Reservado con éxito")</script>';
header("Location: ../mod_reservation/index.php");


} else {

echo '<p>Por favor, complete el formulario</p>';
}
?>