<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $productos = $_POST['productos'];
  $descripcion = $_POST['descripcion'];
  $query = "INSERT INTO task(productos, descripcion) VALUES ('$productos', '$descripcion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea guardada';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>