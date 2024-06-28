<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'home':
                include 'base/home.php';
                break;
            // ---- ALUNOS ----///
            case 'lista_alu':
                include "../sis/alunos/lista_alu.php";
                break;
            
            case 'fadd_alu':
                include "../sis/alunos/fadd_alu.php";
                break;
            
            case 'insere_alu':
                include "../sis/alunos/insere_alu.php";
                break;
            
            case 'fedita_alu':
                include "../sis/alunos/fedita_alu.php";
                break;
                
            case 'view_alu':
                include "../sis/alunos/view_alu.php";
                break;
            
            case 'excluir_alu':
                include "../sis/alunos/excluir_alu.php";
                break;
            
            case 'atualiza_alu':
                include "../sis/alunos/atualiza_alu.php";
                break;
            // ---- USUÁRIOS ----///
            case 'lista_usu':
                include "../sis/usuarios/lista_usu.php";
                break;
            
            case 'fadd_usu':
                include "../sis/usuarios/fadd_usu.php";
                break;
            
            case 'insere_usu':
                include "../sis/usuarios/insere_usu.php";
                break;
            
            case 'fedita_usu':
                include "../sis/usuarios/fedita_usu.php";
                break;
                
            case 'view_usu':
                include "../sis/usuarios/view_usu.php";
                break;
            
            case 'atualiza_usu':
                include "../sis/usuarios/atualiza_usu.php";
                break;
            
            case 'block_usu':
                include "../sis/usuarios/block_usu.php";
                break;
            
            case 'ativa_usu':
                include "../sis/usuarios/ativa_usu.php";
                break;
                       
            default:
                include "base/home.php";
                break;
            // ---- FUNCIONÁRIOS ----///
            case 'lista_func':
                include "../sis/funcionarios/lista_func.php";
                break;
            
            case 'fadd_func':
                include "../sis/funcionarios/fadd_func.php";
                break;
            
            case 'insere_func':
                include "../sis/funcionarios/insere_func.php";
                break;
            
            case 'fedita_func':
                include "../sis/funcionarios/fedita_func.php";
                break;
                
            case 'view_func':
                include "../sis/funcionarios/view_func.php";
                break;
            
            case 'atualiza_func':
                include "../sis/funcionarios/atualiza_func.php";
                break;
            
            case 'excluir_func':
                include "../sis/funcionarios/excluir_func.php";
                break;
            
                // ---- PRODUTOS ----///
            case 'lista_prod':
                include "sis/funcionarios/lista_prod.php";
                break;
            
            case 'fadd_prod':
                include "sis/funcionarios/fadd_prod.php";
                break;
            
            case 'insere_prod':
                include "sis/funcionarios/insere_prod.php";
                break;
            
            case 'fedita_prod':
                include "sis/funcionarios/fedita_prod.php";
                break;
                
            case 'view_prod':
                include "sis/funcionarios/view_prod.php";
                break;
            
            case 'atualiza_prod':
                include "sis/funcionarios/atualiza_prod.php";
                break;
            
            case 'excluir_prod':
                include "sis/funcionarios/excluir_prod.php";
                break;

        }
    }
?>