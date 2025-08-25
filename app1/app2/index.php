<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fale conosco</h1>

    <form methoad="post"      action=""> 
      <label for="nome">Nome:</label><br>
      <input type="text" name="nome" id="nome"  required ><br><br>

      <label for="email">Email:</label><br>
      <input type="email" name="email" id="email" requiered><br><br>


      <label for="mensagem">Mensagem:</label><br>
      <input type="text" name="mensagem" id="mensagem" requiered><br><br>
    </form>

    <?php
    if (S_SERVER["REQUEST _METHOD"] == "POST") {
// Coleta os dados do formulário
$nome  htmlspecialchars($_POST["nome"]);
$email = htmlspecialchars ($_POST["email"]);
$mensagen = htmlspecialchars($_POST["mensagem*]);
// Exibe os dados (em uma aplicação real, você poderia salvar ou enviar por email) 
echo "<h2>Dados Recebidos: </h2>";
echo "<p>strong›Nome:</strong> $nome</p>";
echo "<p><strong>Email:</strong> $email</p›";
echo "<p><strong>Mensagem:</strong> $mensagem/p>";
                             }
                             ?>








</body>
</html>
