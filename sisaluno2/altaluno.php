<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .form{
        width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;  
      }
form{
  border: 4px solid black;
width: 100%;
display: flex;
justify-content: center;
    align-items: center;  

}
    </style>
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];


?>

  <form method="POST" action="crudaluno.php">
        <div class="form">
        <label for="nome">Nome completo:</label>
        <input type="text" name="nome" id="" value=<?php echo $nome?> >
        <br><br>
        <label for="idade">Idade:</label>       
        <input type="text" name="idade" id="" value=<?php echo $idade ?> >
        <br><br>
        <label for="endereco">Endereco:</label>
        <input type="text" name="endereco" id="" value=<?php echo $endereco ?> >
        <br><br>
        <label for="datanascimento">Data de nascimento:</label>
        <input type="text" name="datanascimento" id="" value=<?php echo $datanascimento ?> >
        <br><br>
        <label for="estatus">Estatus:</label>
        <input type="text" name="estatus" id="" value=<?php echo $estatus ?> >
        <br><br>
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        <input type="submit" name="update" value="Alterar">
        </div>
  </form>
</body>
</html>