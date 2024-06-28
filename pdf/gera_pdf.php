<?php
require_once __DIR__ . '/vendor/autoload.php'; // Certifique-se de que o caminho para o autoload do Composer está correto

session_start();
if (!isset($_SESSION['aluno'])) {
    // Redireciona para o formulário se não houver dados do aluno na sessão
    header('Location: index.php');
    exit();
}

$aluno = $_SESSION['aluno'];

// Configurações do mPDF
$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4-P', // A4 Landscape
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 10,
    'margin_bottom' => 10,
]);

// Conteúdo HTML
$html = '
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #000; text-align: left; }
        th { background-color: #f2f2f2; width: 30%;}
    </style>
</head>
<body>
    <h2>Dados do Aluno</h2>
    <table>
        <tr>
            <th>Matrícula</th>
            <td>' . htmlspecialchars($aluno['matricula']) . '</td>
        </tr>
        <tr>
            <th>Nome Completo</th>
            <td>' . htmlspecialchars($aluno['nome_aluno']) . '</td>
        </tr>
        <tr>
            <th>Data de Nascimento</th>
            <td>' . htmlspecialchars($aluno['dt_nasc']) . '</td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td>' . htmlspecialchars($aluno['sexo_aluno']) . '</td>
        </tr>
        <tr>
            <th>Nome do Pai</th>
            <td>' . htmlspecialchars($aluno['nome_pai']) . '</td>
        </tr>
        <tr>
            <th>Nome da Mãe</th>
            <td>' . htmlspecialchars($aluno['nome_mae']) . '</td>
        </tr>
        <tr>
            <th>RG</th>
            <td>' . htmlspecialchars($aluno['rg_aluno']) . '</td>
        </tr>
        <tr>
            <th>CPF</th>
            <td>' . htmlspecialchars($aluno['cpf_aluno']) . '</td>
        </tr>
    </table>
</body>
</html>
';

// Escreve o conteúdo HTML no PDF
$mpdf->WriteHTML($html);

// Gera o PDF para download
$mpdf->Output('aluno.pdf', 'D');

// Limpa os dados do aluno da sessão
unset($_SESSION['aluno']);
?>
