<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h2>Datos recibidos:</h2>";
  echo "Nombre: " . htmlspecialchars($_POST["nombre"]) . "<br>";
  echo "Apellido 1: " . htmlspecialchars($_POST["apellido1"]) . "<br>";
  echo "Apellido 2: " . htmlspecialchars($_POST["apellido2"]) . "<br>";
  echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
  echo "Teléfono: " . htmlspecialchars($_POST["telefono"]) . "<br>";
  echo "Altura: " . htmlspecialchars($_POST["altura"]) . " cm<br>";
  echo "Peso: " . htmlspecialchars($_POST["peso"]) . " kg<br>";
  echo "Pecho: " . htmlspecialchars($_POST["pecho"]) . " cm<br>";
  echo "Cintura: " . htmlspecialchars($_POST["cintura"]) . " cm<br>";
  echo "Caderas: " . htmlspecialchars($_POST["caderas"]) . " cm<br>";
  echo "Dirección: " . htmlspecialchars($_POST["direccion"]) . "<br>";
  echo "Comentarios: " . nl2br(htmlspecialchars($_POST["comentarios"])) . "<br>";
  echo "Método de pago: " . htmlspecialchars($_POST["metodo_pago"]) . "<br>";

  if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === 0) {
    echo "Foto recibida: " . $_FILES["foto"]["name"];
  } else {
    echo "No se ha subido ninguna foto.";
  }
}
?>