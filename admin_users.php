<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
} elseif ($_SESSION['tipoCadastro'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Atribuindo valores para expirar a sessão
$offset = 3*60*60;
$dateFormat = "h:i:s";
$time = gmdate($dateFormat, time()-$offset);

// Verificando se a última atividade foi a 30 minutos atrás
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
  session_unset();
  session_destroy();
  header("Location:../login.php");
}
?>

<?php 
    include('./banco_de_dados/connectTeste.php');

    $sql = "SELECT * FROM usuario";
    $resultVolunteers = $conn->query($sql);
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/home.css">
    <link rel="stylesheet" href="./style/table.css">
    <title>Página Inicial</title>
</head>
<body>
    <main>
    <?php 
        if (!isset($_SESSION['id'])) {
            include('./components/navbar_index.php');
        } else {
            include("./components/navbar_logado_admin.php");
        }
        ?>
        <div class="">
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Data de Nascimento</th>
                    <th>E-mail</th>
                    <th>Gênero</th>
                    <th>Escolaridade</th>
                    <th>Cidade</th>
                    <!-- <th></th> -->
                    <th></th>
                </tr>
                <?php
                if ($resultVolunteers->num_rows > 0) {
                    while ($row = $resultVolunteers->fetch_assoc()) {
                    ?>
                    <tr>
                        <td>
                            <a>
                                <?php echo $row["nome"] ?>
                            </a>
                        </td>
                        <td><?php echo $row["sobrenome"] ?></td>
                        <td>
                            <?php
                                $date = date_create($row["dataDeNascimento"]); 
                                $formattedDate = date_format($date, 'd-m-Y'); 
                                echo str_replace("-", "/", $formattedDate)
                            ?>
                        </td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["genero"] ?></td>
                        <td><?php echo $row["escolaridade"] ?></td>
                        <td><?php echo $row["cidade"] ?></td>
                        
                        <!-- <td>
                            <a href="">
                                Editar
                            </a>
                        </td> -->
                        <td>
                            <a href="">
                                Remover
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                } else {
                ?>
            </table>
                <?php  
                    echo "<h3 style='text-align: center; margin-top: 1.5vh;'>Não há usuários registrador...</h3>";
                }
                ?>
        </div>
    </main>
    <!--<script src="./assets/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>