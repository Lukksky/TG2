<?php $perfil_pagina = "Atendente";
include_once("topo.php"); 
include_once("recepcao.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados do paciente</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h1 class="text-success text-center">OrderClin</h1>
        <h3>Cadastro completo do usuário</h3>
        <form action="incluir_cadastro_usuario.php" method="POST">

    <div class="form-group">
        <label for="cpf_cad_usuario"required>CPF: </label>
        <input type="text" class="form-control" id="cpf_cad_usuario" name="cpf_cad_usuario" placeholder="Insira o CPF sem pontos e traços"required>
    
    </div>
    
    <div class="form-group">
        <label for="endereco_usuario">Endereço: </label>
        <input type="text" class="form-control" id="endereco_usuario" name="endereco_usuario" placeholder="Insira o nome da rua/avenida"required>
    
    </div>

    <div class="form-group">
        <label for="num_res_usuario">Número: </label>
        <input type="number" class="form-control" id="num_res_usuario" name="num_res_usuario" placeholder="Insira o número da residência"required>
    
    </div>

    <div class="form-group">
        <label for="bairro_usuario">Bairro: </label>
        <input type="text" class="form-control" id="bairro_usuario" name="bairro_usuario" placeholder="Insira o bairro da residência"required>
    
    </div>

    <div class="form-group">
        <label for="cidade_usuario">Cidade: </label>
        <input type="text" class="form-control" id="cidade_usuario" name="cidade_usuario" placeholder="Insira a cidade"required>
    
    </div>

    <div class="form-group">
        <label for="estado_usuario">Estado: </label>
        <input type="text" class="form-control" id="estado_usuario" name="estado_usuario" placeholder="Insira o estado"required>
    
    </div>

    <div class="form-group">
        <label for="cep_usuario">CEP: </label>
        <input type="text" class="form-control" id="cep_usuario" name="cep_usuario" placeholder="Insira o CEP"required>
    
    </div>

    <h3>Dados pessoais</h3>

    <div class="form-group">
        <label for="nome_cad_usuario">Nome completo: </label>
        <input type="text" class="form-control" id="nome_cad_usuario" name="nome_cad_usuario" placeholder="Digite o nome completo"required>
    
    </div>


    <div class="form-group">
        <label for="rg_cad_usuario">RG: </label>
        <input type="text" class="form-control" id="rg_cad_usuario" name="rg_cad_usuario" placeholder="Insira o RG"required>
    
    </div>

    <div class="form-group">
        <label for="dtn_cad_usuario">Data de nascimento: </label>
        <input type="date" class="form-control" id="dtn_cad_usuario" name="dtn_cad_usuario" placeholder="Insira a data de nascimento"required>
    
    </div>

    <div class="form-group">
            Sexo:<br/>
            <input type="radio" name="sexo_usuario" value="masc">Masculino<br/>
            <input type="radio" name="sexo_usuario" value="fem">Feminino<br/>
    </div>       

    <h3>Crie uma senha para acesso a plataforma!</h3>


    <div class="col-12">
              <label for="senha_usuario" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha_usuario" id="senha_usuario" required>
              <div class="invalid-feedback">
                Por favor digite uma senha.
              </div>
    </div>

            <div class="col-12">
              <label for="perfil_usuario" class="form-label"><br>Perfil do usuário:</label>
                <select name="perfil_usuario" required>
                    <option value=""></option>
                    <option value="Atendente">Atendente</option>
                    <option value="Medico">Médico</option>
                    <option value="Paciente">Paciente</option>
                </select> 
            </div>

<br/>
    


<button type="submit" class="btn btn-success">Enviar</button>
</div>
</form>
</body>

</html>