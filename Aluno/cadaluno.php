<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadaluno</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(32, 27, 44), rgb(43, 19, 75));
}
.box{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0 ,0 , 0.5);
padding:  40px;
border-radius: 20px;
width: 20%;
}
fieldset{
    border: 3px solid #00ff88;
}
legend{
    border : 1px solid #00ff88;
    padding: 10px;
    text-align: center;
    background-color: #00ff88;
    border-radius: 8px;
color:  #2b134b;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.bnt{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.bnt a{
    text-decoration: none;
    color: #2b134b;
 
}
#submit{
    background-color: #00ff88;
    border-radius: 8px;
    border: 0.5px solid #2b134b;
    box-shadow: 0px 10px 40px #00000056;
    padding: 10px;
}
    </style>
</head>
<body>
    <div class="box">

        <form  method="GET" action="crudaluno.php">
            <fieldset>
                <legend><b>Formulário de cadastro discente</b></legend><br>
                <div class="imputBox">
                    <input type="text" name="nomealuno"  class="inputUser" required>
                    <label for="nomealuno" class="labelInput">Nome completo</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="number" name="idade"  class="inputUser" required> 
                    <label for="idade" class="labelInput" >Idade</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="date" name="datanascimento"  class="inputUser">
                    <label for="datanascimento" class="labelInput">Data de nascimento</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="text" name="endereco"  class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>
               <div class="bnt">
                 <a id="submit" href="index.php"><b>VOLTAR</b><a>
                 <input id="submit" type="submit" name="cadastrar" value="cadastrar">
            </div>
         
            </fieldset>
        </form>
    </div>
</body>
</html>
