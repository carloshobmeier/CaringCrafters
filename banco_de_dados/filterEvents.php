<?php
  include_once('./connectTeste.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $institutions = mysqli_real_escape_string($conn, $_POST['institutions']);

    $sql = "SELECT * FROM instituicao WHERE nomeFantasia = '".$institutions."';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {

      session_start();
      $_SESSION['idInst'] = $row['id_Inst'];
      $_SESSION['institutionsName'] = $institutions;

      echo $row['id_Inst'];
      echo $institutions;
      }
      header("Location:../events.php");
      } else {
        session_start();
        $_SESSION['idInst'] = "";
        $_SESSION['institutionsName'] = "";
        header("Location:../events.php");
      }
  }
