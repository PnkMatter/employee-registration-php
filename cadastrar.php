<?php
    $nome_completo = $_POST ['nome_completo'];
    $data_nascimento = $_POST ['data_nascimento'];
    $cpf = $_POST ['cpf'];
    $rg = $_POST ['rg'];
    $endereco = $_POST ['endereco'];
    $telefone = $_POST ['telefone'];
    $email = $_POST ['email'];
    $sexo = $_POST ['sexo'];
    $estado_civil = $_POST ['estado_civil'];
    $cargo = $_POST ['cargo'];
    $setor = $_POST ['setor'];
    $data_emissao = $_POST ['data_emissao'];
    $num_matricula = $_POST ['num_matricula'];
    $salario = $_POST ['salario'];
    $tipo_contrato = $_POST ['tipo_contrato'];
    $supervisor_gestor = $_POST ['supervisor_gestor'];
    $jornada = $_POST ['jornada'];
    $ctps = $_POST ['ctps'];
    $banco = $_POST ['banco'];
    $agencia = $_POST ['agencia'];
    $num_conta = $_POST ['num_conta'];
    $contato_nome = $_POST ['contato_nome'];
    $contato_numero = $_POST ['contato_numero'];
    $alergia_condicoes = $_POST ['alergia_condicoes'];

    $strcon = mysqli_connect ("localhost", "root", "", "rh") or die ("Erro ao conectar com o banco");
    
    $sql = "INSERT INTO func (
    nome_completo, data_nascimento, cpf, rg, endereco, telefone, email, sexo,
    estado_civil, cargo, setor, data_emissao, num_matricula, salario,
    tipo_contrato, supervisor_gestor, jornada, ctps, banco, agencia,
    num_conta, contato_nome, contato_numero, alergia_condicoes
    ) VALUES (
    '$nome_completo', '$data_nascimento', '$cpf', '$rg', '$endereco', '$telefone', '$email', '$sexo',
    '$estado_civil', '$cargo', '$setor', '$data_emissao', '$num_matricula', '$salario',
    '$tipo_contrato', '$supervisor_gestor', '$jornada', '$ctps', '$banco', '$agencia',
    '$num_conta', '$contato_nome', '$contato_numero', '$alergia_condicoes'
    )";

    mysqli_query($strcon, $sql) or die ('Erro ao tentar cadastrar registro');
    echo "funcionário cadastrado com sucesso";
?>