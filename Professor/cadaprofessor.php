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
    background-image: linear-gradient(to right, white, white);
}
.box{
    color: black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
padding:  40px;
border-radius: 20px;
width: 20%;
box-shadow: 0px 10px 40px #00000089;
}
fieldset{
    border: 3px solid black;
}
legend{
    border : 1px solid black;
    padding: 10px;
    text-align: center;
    background-color: black;
    border-radius: 8px;
color:  white;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid black;
    color: black;
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
    color: white;
 
}
#submit{
    background-color: black;
    border-radius: 8px;
    border: 0.5px solid black;
    box-shadow: 0px 10px 40px #00000056;
    padding: 10px;
    color: white;
}
    </style>
</head>
<body>
    <div class="box">

        <form  method="GET" action="crudprofessor.php">
            <fieldset>
                <legend><b>Formulário de cadastro docente</b></legend><br>
                <div class="imputBox">
                    <input type="text" name="nomeprofessor"  class="inputUser" required>
                    <label for="nomeprofessor" class="labelInput"  >Nome completo</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="number" name="idade"  class="inputUser" required> 
                    <label for="idade" class="labelInput" >Idade</label>
                </div><br><br>
                <div class="imputBox">
                <input type =" text " name ="cpf" 
            
                
                class="inputUser" required>
                 <label for="cpf" class="labelInput"  >CPF</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="date" name="datanascimento"  class="inputUser">
                    <label for="datanascimento" class="labelInput">Data de nascimento</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="text" name="endereco"  class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>
                <div class="imputBox">
                    <input type="text" name="estatus"  class="inputUser" required>
                    <label for="estatus" class="labelInput">Estatus (1 ou 0):</label>
                </div><br><br>
               <div class="bnt">
                 <a id="submit" href="index.php"><b>Voltar</b><a>
                 <input id="submit" type="submit" name="cadastrar" value="cadastrar">
            </div>
         
            </fieldset>
        </form>
    </div>
</body>
</html>
