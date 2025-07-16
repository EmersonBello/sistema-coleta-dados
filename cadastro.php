<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once('config.php'); // conecta com o banco

    // Captura os dados
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verifica se as senhas coincidem
    if ($senha !== $confirmar_senha) {
        die("Erro: as senhas não coincidem.");
    }

    // Criptografa a senha
    //$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Insere no banco
    $sql = "INSERT INTO usuarios (
        nome, cpf, data_nascimento, genero, logradouro, bairro, numero,
        cidade, estado, cep, email, telefone, usuario, senha
    ) VALUES (
        '$nome', '$cpf', '$data_nascimento', '$genero', '$logradouro', '$bairro', '$numero',
        '$cidade', '$estado', '$cep', '$email', '$telefone', '$usuario', '$senha'
    )";

    $result = mysqli_query($conexao, $sql);

    /*if ($result) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }*/

    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="style.cadastro.css">
</head>
<body>
  <div class="container">
    <h1>Cadastro de Usuário</h1>

    <form action="cadastro.php" method="POST">
      <h2>Dados do Usuário</h2>

      <label>Nome completo:</label>
      <input type="text" name="nome" placeholder="Digite seu nome" required>

      <label>CPF:</label>
      <input type="text" name="cpf" placeholder="000.000.000-00" required>

      <label>Data de nascimento:</label>
      <input type="date" name="data_nascimento" required>

      <label>Gênero:</label>
      <div class="radio-group">
        <label><input type="radio" name="genero" value="Masculino"> Masculino</label>
        <label><input type="radio" name="genero" value="Feminino"> Feminino</label>
        <label><input type="radio" name="genero" value="Não binário"> Não binário</label>
        <label><input type="radio" name="genero" value="Prefiro não informar"> Prefiro não informar</label>
      </div>

      <h2>Endereço</h2>

      <label>Logradouro:</label>
      <input type="text" name="logradouro" required>

      <label>Bairro:</label>
      <input type="text" name="bairro" required>

      <label>Número:</label>
      <input type="text" name="numero" required>

      <label>Cidade:</label>
      <input type="text" name="cidade" required>

      <label>Estado:</label>
      <select name="estado" required>
        <option value="">Selecione o estado</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
      </select>

      <label>CEP:</label>
      <input type="text" name="cep" required>

      <h2>Contatos</h2>

      <label>E-mail:</label>
      <input type="email" name="email" required>

      <label>Telefone:</label>
      <input type="tel" name="telefone" required>

      <h2>Credenciais de Acesso</h2>

      <label>Nome de usuário:</label>
      <input type="text" name="usuario" required>

      <label>Senha:</label>
      <input type="password" name="senha" required>

      <label>Confirmar senha:</label>
      <input type="password" name="confirmar_senha" required>

      <button type="submit">Cadastrar</button>
    </form>

    <div class="links">   
      <p>Já possui conta? <a href="login.php">Faça login</a></p>
    </div>
  </div>
</body>
</html>
