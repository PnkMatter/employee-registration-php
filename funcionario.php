<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de funcionário</title>
    <style>
        
        body {
            background-color:rgb(228, 228, 228);
            font-size: 18px;
            display: flex;
            flex-direction: column;
        }

        h2, h3, h4, h5 {
            font-size: 24px;
        }

        input {
            width: 20%;
        }

        .enviar {
            height: 40px
        }
        

    </style>
</head>
<body>
    <div class="menu">
        <h1>Dados do funcionário</h1>

        <form name="dadosFunc" action="cadastrar.php" method="POST">
            <div class="forms">
                <div class="first"></div>

                    <h2>Dados pessoais</h2>            

                    <label> Nome completo: </label>
                    <input type="text" name="nome_completo" size="50" ><br>

                    <label> Data de nascimento: </label>
                    <input type="date" name="data_nascimento" size="10" ><br>

                    <label> CPF: </label>
                    <input type="text" name="cpf" size="14" ><br>

                    <label> RG: </label>
                    <input type="text" name="rg" size="12" ><br>

                    <label> Endereço completo: </label>
                    <input type="text" name="endereco" size="50" ><br>

                    <label> Telefone de contato: </label>
                    <input type="number" name="telefone" size="14" ><br>

                    <label> E-mail profissional: </label>
                    <input type="email" name="email" size="50" ><br>

                    <label> Sexo: </label>
                    <input type="text" name="sexo" size="25" ><br>

                    <label> Estado civil: </label>
                    <input type="text" name="estado_civil" size="10" ><br>

                    <h3>Dados proficionais</h3>

                    <label> Cargo/função: </label>
                    <input type="text" name="cargo" size="30" ><br>

                    <label> Setor/departamento: </label>
                    <input type="text" name="setor" size="50" ><br>

                    <label> Data de admissão: </label>
                    <input type="date" name="data_emissao" size="10" ><br>

                    <label> Número de matrícula ou registro interno: </label>
                    <input type="number" name="num_matricula" size="20" ><br>

                    <label> Salário: </label>
                    <input type="number" name="salario" size="15" ><br>

                    <label> Tipo de contrato: </label>
                    <input type="text" name="tipo_contrato" size="3" ><br>

                    <label> Supervisor ou gestor direto: </label>
                    <input type="text" name="supervisor_gestor" size="50" ><br>

                    <label> Jornada de trabalho: </label>
                    <input type="text" name="jornada" size="25" ><br>

                    <label> Número da carteira de trabalho (CTPS): </label>
                    <input type="number" name="ctps" size="14" ><br>

                </div>
                <div class="second">

                    <h4>Dados bancários</h4>

                    <label> Banco: </label>
                    <input type="text" name="banco" size="25" ><br>

                    <label> Agência: </label>
                    <input type="number" name="agencia" size="25" ><br>

                    <label> Número da conta: </label>
                    <input type="number" name="num_conta" size="25" ><br>

                    <h5>Dados para emergência e saúde</h5>

                    <label> Contato de emergência (nome): </label>
                    <input type="text" name="contato_nome" size="50" ><br>

                    <label> Contato de emergência (telefone): </label>
                    <input type="text" name="contato_numero" size="14" ><br>

                    <label> Alergias ou condições médicas relevantes: </label>
                    <input type="text" name="alergia_condicoes" size="50" ><br>

                </div>
            </div>

            <input class="enviar" type="submit" name="enviar" value="Enviar">

        </form>
    </div>
</body>
</html>