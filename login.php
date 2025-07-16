<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.login.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="testLogin.php" method="POST">
      <label for="email">E-mail:</label>
      <input type="email" name="email" placeholder="Digite seu e-mail" required>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" placeholder="Digite sua senha" required>

      <button type="submit" name="submit">Entrar</button>
    </form>

    <div class="links">
      <a href="#">Esqueceu a senha?</a> |
      <a href="cadastro.php">Cadastre-se</a>
    </div>
  </div>
</body>
</html>
