<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura dos dados do formulário
    $aluno = [
        'matricula' => $_POST['matricula'] ?? '',
        'nome_aluno' => $_POST['nome_aluno'] ?? '',
        'dt_nasc' => $_POST['dt_nasc'] ?? '',
        'sexo_aluno' => $_POST['sexo_aluno'] ?? '',
        'nome_pai' => $_POST['nome_pai'] ?? '',
        'nome_mae' => $_POST['nome_mae'] ?? '',
        'rg_aluno' => $_POST['rg_aluno'] ?? '',
        'cpf_aluno' => $_POST['cpf_aluno'] ?? '',
    ];

    // Salvar dados (substitua este comentário com a lógica real de salvamento)

    if ($_POST['action'] === 'generate_pdf') {
        // Armazena os dados na sessão para passá-los ao script de geração de PDF
        session_start();
        $_SESSION['aluno'] = $aluno;
        // Redireciona para a geração do PDF
        header('Location: gera_pdf.php');
        exit();
    } else {
        // Redireciona para a lista de alunos ou outra página conforme necessário
        header('Location: ?page=lista_alu');
        exit();
    }
}
?>
