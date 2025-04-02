<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  // $query = "DELETE FROM task WHERE id = $id";
  // $result = mysqli_query($conn, $query);
  // if(!$result) {
  //   die("Query Failed.");
  // }

  // $_SESSION['message'] = 'Task Removed Successfully';
  // $_SESSION['message_type'] = 'danger';
  
  // Preparamos la consulta SQL para eliminar la tarea
  $query = "DELETE FROM task WHERE id = :id";
  $stmt = $conn->prepare($query);

  // Vinculamos el parámetro :id con el valor de $id
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  // Ejecutamos la consulta
  if ($stmt->execute()) {
      // Mensaje de éxito
      $_SESSION['message'] = 'Task Removed Successfully';
      $_SESSION['message_type'] = 'danger';
  } else {
      // Si algo falla, mostramos un mensaje de error
      $_SESSION['message'] = 'Error: Could not remove the task';
      $_SESSION['message_type'] = 'danger';
  }
  header('Location: index.php');
}

?>