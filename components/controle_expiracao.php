<?php
session_start();

// Defina o tempo de inatividade permitido em minutos
$timeoutMinutes = 30;
$timeout = $timeoutMinutes * 60;  // conversão

// Verifica se a variável de sessão LAST_ACTIVITY está setada
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

// Atualiza o timestamp de atividade a cada ação do usuário
$_SESSION['LAST_ACTIVITY'] = time();  // atualiza o timestamp da última atividade

