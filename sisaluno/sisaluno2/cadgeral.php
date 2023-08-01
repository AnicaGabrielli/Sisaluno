<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>tela</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Symbols:wght@100&display=swap');

body *{
    box-sizing: border-box;
    
}
body{
    margin: 0;
    font-family: 'Noto Sans Symbols', sans-serif;
}
.main-login{
    width: 100vw;
    height: 50vw;
    background: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.right-professor{
    width: 50vw;
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;  
}
.card-professor{
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;  
    flex-direction: column;
    padding: 30px 35px;
    background: whitesmoke;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #00000089;
}
.card-professor > h1{
    color :  #2f2841 ;
    font-weight: 800px;
    margin: 0;


}
.textfield{
    width: 100%;
    display: flex;
    flex-direction: column;
    margin: 10px 0px;
    padding-right: 45px;
}
.bnt-cad{
width: 100%;
padding: 16px 0px;
margin: 25px;
border: none;
border-radius: 8px;
outline: none;
text-transform: uppercase;
font-weight: 800px;
letter-spacing: 3px;
color:#2b134b;
background: #fffafa;
cursor: pointer;
box-shadow: 0px 10px 40px -12px #00000089;
}
.bnt-cad a {
text-decoration: none;
color: #2b134b;
}
.left-aluno-img{
    width: 35vw;
}

@media only screen and (max-width:950px){
    .card-professor {
        width:85%;

    }
}
@media only screen and (max-width:600px){
    .main-login {
        flex-direction: column;

    }
    .left-loguin>h1{
        display:none;
    }
    .left-login{
        width:100%;
        height:auto;

    }
    .right-login{
        width:100%;
        height:auto;
    }
    .card-login{
        width: 90%;
    }

}

    </style>
</head>
<body>
    <div class="main-login">
        <div class="right-professor">
            <div class="card-professor">
                <h1>PROFESSOR</h1>
                <div class="textfield">
                    <button class="bnt-cad"> <a href="cadprofessor.php">Cadastro</a></button>
                    <button class="bnt-cad"><a href="listaprofessor.php">Lista de Professores</a></button>
                </div>
            </div>
        </div>
        <div class="right-professor">
            <div class="card-professor">
                <h1>ALUNO</h1>
                <div class="textfield">
                    <button class="bnt-cad"> <a href="cadaluno.php">Cadastro</a></button>
                    <button class="bnt-cad"><a href="listaluno.php">Lista de alunos</a></button>
                </div>
            </div>
        </div>
        <div class="right-professor">
            <div class="card-professor">
                <h1>DISCIPLINA</h1>
                <div class="textfield">
                    <button class="bnt-cad"> <a href="caddisciplina.php">Cadastro</a></button>
                    <button class="bnt-cad"><a href="listadisciplina.php">Lista de disciplinas</a></button>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>