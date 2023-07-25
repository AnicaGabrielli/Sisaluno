<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vw;
            background-image: linear-gradient(to right, rgb(32, 27, 44), rgb(43, 19, 75));
        }

        .container {
            color: white;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 90%;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2px 0;
            border-radius: 8px;
            -webkit-box-shadow: 3px 3px 3px rgb(43, 19, 75);
            border: 6px solid #00ff88;

        }

        .container table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;

        }

        .container table tr th {
            height: 56px;
            font-size: 16px;
            font-weight: 700px;
            letter-spacing: .25px;
            text-align: center;
            padding: 8px;

        }

        td {
            border-left: #00ff88 1px solid;
            border-bottom: 1px solid #00ff88;
            text-align: center;

        }

        a {
            text-align: center;
            text-decoration: none;
            padding: 5px;
            color: rgb(43, 19, 75);

        }

        button {
            background-color: #00ff88;
            border-radius: 40px;
            border: 1px dashed rgb(43, 19, 75);
        }
    </style>
</head>

<body>


    <?php
    /*
     * Melhor prática usando Prepared Statements
     * 
     */
    require_once('conexao.php');

    $retorno = $conexao->prepare('SELECT * FROM Aluno');
    $retorno->execute();

    ?>

    <div class="container">
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Data de nascimento</th>
                <th>Endereço</th>
                <th>Voltar</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
            <tbody>
            <tr>
            <?php foreach($retorno->fetchall() as $value) { ?>
    
                <tr>
                    <td class="right">
                        <?php echo $value['id'] ?>
                    </td>
                    <td class="right">
                        <?php echo $value['nome'] ?>
                    </td>
                    <td class="right">
                        <?php echo $value['idade'] ?>
                    </td>
                    <td class="right">
                        <?php echo $value['datanascimento'] ?>
                    </td>
                    <td class="right">
                        <?php echo $value['endereco'] ?>
                    </td>
                    <td> <button class='button button3'><a href='index.php'>voltar</a>;</td>
                    <td>
                    
                    <form method="POST" action="altaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>
                    </td>
                    <td>
                    <form method="GET" action="crudaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                    </td>

                </tr>
            
                <?php } ?>
            </tr>
            </tbody>
        </table>
        <?php
    
        ?>
    </div>
</body>

</html>