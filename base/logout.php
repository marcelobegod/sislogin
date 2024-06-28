<?php
// Inicia a sessão se não estiver iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Destrói todas as variáveis de sessão
$_SESSION = array();

// Se necessário, destrói a sessão
if (session_status() === PHP_SESSION_ACTIVE) {
    session_destroy();
}

// Redireciona para a página de login (ou qualquer outra página desejada)
header("Location: ../index.php");
exit;
?>
