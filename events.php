<!DOCTYPE html>
<?php
session_start();
include('./banco_de_dados/connectTeste.php');

// Check if the session variable 'id' is not set
/*
if (!isset($_SESSION['id'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
*/

$page = isset($_GET['page']) ? $_GET['page'] : '0';
$page = $page *15
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/events.css">
    <title>Página Inicial</title>
</head>
<body>
    <main >
    <?php 
        if (!isset($_SESSION['id'])) {
            include('./components/navbar_index.php');
        } else {
            if($_SESSION['tipoCadastro'] === 'usuario') {
                include("./components/navbar_logado_usuario.php");
            } elseif ($_SESSION['tipoCadastro'] === 'instituicao') {
                include("./components/navbar_logado_instituicao.php");
            }
        }
        ?>
        
        <?php
        $sql = "SELECT COUNT(*) AS total_events FROM Evento";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Output data
            $row = $result->fetch_assoc();
            $total_events = $row["total_events"];
        } else {
            echo "0 events";
        }
        $numberOfPages = floor($total_events/15);
        if ($total_events%15 != 0) {
            $numberOfPages++;
        }
        for ($i=0; $i < $numberOfPages; $i++) { 
            echo "<a href='events.php?page=".$i."'><button  id='".$i."'>".$i."</button></a>";
            
        }
        ?>
        <section class="cards container d-flex flex-row flex-wrap justify-content-start">
        <?php

        loadContent($page)
        ?>
        </section>
            
        </main>
    <?php include('./components/footer.php'); ?>
    <!--<script src="./assets/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    <?php
function loadContent($pagination) {
    include('./banco_de_dados/connectTeste.php');

    $sql = "SELECT * FROM Evento LIMIT ".$pagination.",15";
    $result = $conn->query($sql);
    
    // Check if there are results
    if ($result->num_rows > 0) {
        // Output data of each row
            while($row = $result->fetch_assoc()) {
                // HTML card for each event
                echo "<div class='card container'>";
                echo "<h3>" . $row["id_evento"] . "</h3>";
                echo "<p>Date: " . $row["dataEvento"] . "</p>";
                echo "<p>Location: " . $row["cep"] . "</p>";
                echo "<p>Description: " . $row["conteudo"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
    }
    
    ?>
</body>
</html>