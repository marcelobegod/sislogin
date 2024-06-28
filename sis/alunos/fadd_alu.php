<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="col-md-10">
            <h2>Aluno</h2>
        </div>
        <div class="col-md-2">
            <!-- Chama o Formulário para adicionar alunos -->
            <a href="?page=fadd_alu" class="btn btn-primary pull-right h2">Novo Aluno</a> 
        </div>
    </div>
    <form id="alunoForm" action="../pdf/process_form.php" method="post">
        <!-- 1ª LINHA -->    
        <div class="row"> 
            <div class="form-group col-md-2">
                <label for="matricula">Matrícula</label>
                <input type="text" class="form-control" name="matricula" readonly>
            </div>
            <div class="form-group col-md-5">
                <label for="nome_aluno">Nome Completo</label>
                <input type="text" class="form-control" name="nome_aluno">
            </div>
            <div class="form-group col-md-3">
                <label for="dt_nasc">Data Nascimento</label>
                <input type="date" class="form-control" name="dt_nasc">
            </div>
            <div class="form-group col-md-2">
                <label for="sexo_aluno">Sexo</label>
                <select class="form-control" name="sexo_aluno">
                    <option> --------- </option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
        </div>
        <!-- 2ª LINHA -->
        <div class="row"> 
            <div class="form-group col-md-6">
                <label for="nome_pai">Nome do Pai</label>
                <input type="text" class="form-control" name="nome_pai">
            </div>

            <div class="form-group col-md-6">
                <label for="nome_mae">Nome da Mãe</label>
                <input type="text" class="form-control" name="nome_mae">
            </div>
        </div>
        <!-- 3ª LINHA -->
        <div class="row"> 
            <div class="form-group col-md-4">
                <label for="rg_aluno">RG</label>
                <input type="text" class="form-control" name="rg_aluno">
            </div>
         
            <div class="form-group col-md-4">
                <label for="cpf_aluno">CPF</label>
                <input type="text" class="form-control" name="cpf_aluno">
            </div>
        </div>
        <hr />
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" name="action" value="save" class="btn btn-success">Salvar</button>
                <a href="?page=lista_alu" class="btn btn-danger">Cancelar</a>
                <button type="submit" name="action" value="generate_pdf" class="btn btn-primary">Gerar PDF</button>
            </div>
        </div>
    </form> 
</div>
