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
    height: 100vw;
    background: #201b2c;
    display: flex;
    justify-content: center;
    align-items: center;
}
.left-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.left-login > h1{
    color:#77ffc0 ;
    font-size: 1.8vw;

}
.right-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;  
}
.card-login{
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;  
    flex-direction: column;
    padding: 30px 35px;
    background: #2f2841;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #00000056;
}
.card-login > h1{
    color : #00ff88;
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
.bnt-login{
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
background: #00ff88;
cursor: pointer;
box-shadow: 0px 10px 40px -12px #00ff8052;
}
.bnt-login a {
text-decoration: none;
color: #2b134b;
}
.left-login-img{
    width: 35vw;
}

@media only screen and (max-width:950px){
    .card-login {
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
        <div class="left-login">
            <h1>Controle Academico <br>Instituto Federal - Campus Guanambi</h1>
            <img src="imagem.svg" alt="imagem" class="left-login-img">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Bem Vindo!</h1>
                <div class="textfield">
                    <button class="bnt-login"> <a href="cadaluno.php">Cadastro</a></button>
                    <button class="bnt-login"><a href="listaluno.php">Lista de alunos</a></button>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>
