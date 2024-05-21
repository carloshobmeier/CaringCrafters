<!DOCTYPE html>
<?php
include('./components/controle_expiracao.php');
// Check if the session variable 'id' is not set
/*
if (!isset($_SESSION['id'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
*/

$page = isset($_GET['page']) ? $_GET['page'] : '0';
$page = $page *15;

$instFIlter = isset($_SESSION['idInst']) ? $_SESSION['idInst'] : '';
$InstName = isset($_SESSION['institutionsName']) ? $_SESSION['institutionsName'] : '';

?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/events.css">
    <title>Eventos</title>
</head>
<body>
    <main >
        <?php 
        if (!isset($_SESSION['id'])) {
            include('./components/navbar_index.php');
        } else {
            if($_SESSION['tipoCadastro'] === 'usuario') {
                include("./components/navbar_logado_usuario.php");
            } else if ($_SESSION['tipoCadastro'] === 'instituicao') {
                include("./components/navbar_logado_instituicao.php");
            }
        }
        include('./banco_de_dados/connectTeste.php');

        $sql = "SELECT nomeFantasia FROM Instituicao";
        $resultInst = $conn->query($sql);
        ?>
        <div class="container">

            <form action="./banco_de_dados/filterEvents.php" method="POST">
                <label for="institutions">Choose an institution:</label>
                <select name="institutions" id="institutions">
                    <?php
            if ($resultInst->num_rows > 0) {
                echo "<option value='SelectAll'>Select All</option>";
                while($row = $resultInst->fetch_assoc()) {
                    echo "<option value='" . $row["nomeFantasia"] . "'>" . $row["nomeFantasia"] . "</option>";
                }
            } else {
                echo "<option value=''>No institutions found</option>";
            }
            ?>
        </select>
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($instFIlter == "") {
            $sql = "SELECT COUNT(*) AS total_institutions FROM instituicao";
        }
        else{
            $sql = "SELECT COUNT(*) AS total_institutions FROM instituicao WHERE id_Inst = ".$instFIlter.";";
        }
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Output data
            $row = $result->fetch_assoc();
            $total_events = $row["total_institutions"];
        } else {
            echo "0 institutions";
        }
        $numberOfPages = floor($total_events/15);
        if ($total_events%15 != 0) {
            $numberOfPages++;
        }
        for ($i=0; $i < $numberOfPages; $i++) { 
            echo "<a href='instituicoes_cards.php?page=".$i."'><button  id='".$i."'>".$i."</button></a>";
            
        }
        ?>
        </div>
        <section class="cards container d-flex flex-row flex-wrap justify-content-start  my-5">
            <?php
        
        loadContent($page,$instFIlter)
        ?>
        </section>
            
        </main>
    <?php include('./components/footer.php'); ?>
    <!--<script src="./assets/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    <?php
function loadContent($pagination,$instFIlter) {
    include('./banco_de_dados/connectTeste.php');
    if ($instFIlter == "") {
        $sql = "SELECT * FROM instituicao LIMIT ".$pagination.",15";
    }
    else{
        $sql = "SELECT * FROM instituicao WHERE id_Inst = ".$instFIlter." LIMIT ".$pagination.",15";
    }

    $result = $conn->query($sql);
    
    // Check if there are results
    if ($result->num_rows > 0) {
        // Output data of each row
            while($row = $result->fetch_assoc()) {
                // HTML card for each event
                echo "<div class='card container'>";
                echo "<h3 style=\"margin-top: 10px;\">" . $row["nomeFantasia"] . "</h3>";
                echo "<p>Cidade: " . $row["cidade"] . "</p>";
                echo "<p>E-mail: " . $row["email"] . "</p>";
                echo "<p>Telefone: " . $row["telefone"] . "</p>";
                echo "<a href=''><button class=\"btn btn-success mb-3\">Conectar-se</button></a>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
    }
    
    ?>
</body>
</html>