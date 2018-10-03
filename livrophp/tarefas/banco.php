<?php

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

function buscar_tarefas($conexao) {
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa) {
    $sqlGravar = "
        INSERT INTO tarefas
        (nome, descricao,prioridade,prazo,concluida)
        VALUES
        ('{$tarefa['nome']}','{$tarefa['descricao']}',{$tarefa['prioridade']},'{$tarefa['prazo']}',{$tarefa['concluida']})";

    mysqli_query($conexao, $sqlGravar);
}

function buscar_tarefa($conexao,$id){
    $sqlBusca = 'select * from tarefas where id = ' .$id;
    $resultado = mysqli_query($conexao,$sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function editar_tarefa($conexao, $tarefa)
{
$sqlEditar = "
UPDATE tarefas SET
nome = '{$tarefa['nome']}',
descricao = '{$tarefa['descricao']}',
prioridade = {$tarefa['prioridade']},
prazo = '{$tarefa['prazo']}',
concluida = {$tarefa['concluida']}
WHERE id = {$tarefa['id']}
";
mysqli_query($conexao, $sqlEditar);
}

function remover_tarefa($conexao,$id)
{
    $sqlRemover = "delete from tarefas where id ={$id}";
    mysqli_query($conexao,$sqlRemover);
}

function buscar_anexos($conexao, $tarefa_id)
{
    $sql = "SELECT * FROM anexos WHERE tarefa_id = {$tarefa_id}";
    $resultado = mysqli_query($conexao, $sql);
    $anexos = array();
    while ($anexo = mysqli_fetch_assoc($resultado)) {
        $anexos[] = $anexo;

        return $anexos;
}
}