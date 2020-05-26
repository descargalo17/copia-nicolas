<?php



// Recibimos por POST los datos procedentes del formulario   

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$departamento=$_POST["departamento"]; 
$prioridad=$_POST["proridad"]; 
$contenido = $_POST['contenido'];
$asunto = $_POST['asunto'];
$fecha = date("Y-m-d");

echo $nombre;
echo $email;
echo $contenido;
echo $asunto;


//recorremos el array de cervezas seleccionadas. No olvidarse q la primera posición de un array es la 0 
     
echo "<br> departamento : ".$departamento[0];    
  



echo "<br> proridad  : " . $prioridad[0];  





// Abrimos la conexion a la base de datos   
include ("conexion.php"); 

$sql = "INSERT INTO tiket (nombre, email, contenido , fecha, id_departamento, id_prioridad, asunto) VALUES ('$nombre', '$email', '$contenido', '$fecha',  $departamento[0], $prioridad[0],'$asunto')";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>