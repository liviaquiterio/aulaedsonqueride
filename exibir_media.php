<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de 3 Notas</title>
    <style>
        body {
            font-family: 'Courièr New', Courier, monospace;
            font-size: 20px;
        }

        #container {
            margin: auto;
            width: 1200px;
        }

        #login {
            margin: 100px auto;
            border: 1px solid blue;
            background-color: purple;
            color: pink;
            width: 550px;
            padding: 1%;
        }

        label {
            color: white;
            font-weight: bold;
        }

        input[type="submit"] {
            width: 130px;
            height: 40px;
            margin-left: 30%;
            background: green;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 15px;

        }
    </style>
</head>

<body>
    <div id="container">
        <div id="login">
            <h3>Média de 3 Notas</h3>
            <form name="media" method="post" action="exibir_media.php">
                <p>
                    <label>Aluno:</label>
                    <input type="text" name="aluno" maxlenght="60" placeholder="Informe o nome do aluno required">
                </p>
                <p>
                    <label>Disciplina:</label><br>
                    <select name="disciplina" required>
                        <option value="Historia">História</option>
                        <option value="Portugues">Português</option>
                        <option value="Matematica">Matemática</option>
                        </select>
                </p>
                <p>
                    <label>Nota 1:</label>
                    <input type="number" name="nota1" win="0" max="10" step="0.01" required><br>
                    <label>Nota 2:</label>
                    <input type="number" name="nota2" win="0" max="10" step="0.01" required><br>
                    <label>Nota 3:</label>
                    <input type="number" name="nota3" win="0" max="10" step="0.01" required>
                </p>
                <p>
                    <input type="submit" value="Média" name="media">
                </p>
            </form>
            <?php
        if(isset($_POST["media"]))
        {
            $aluno = $_POST["aluno"];
            $disciplina = $_POST["disciplina"];
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            // exibe os dados
            echo "<hr size='3' color='white' align='left'>";
            echo "<strong>Aluno......: </strong>" . $aluno;
            echo "<strong><br>Disciplina: </strong>" . $disciplina;
            echo "<strong><br>Nota 1: </strong>" . $nota1;
            echo "<strong><br>Nota 2: </strong>" . $nota2;
            echo "<strong><br>Nota 3: </strong>" . $nota3;
            $media = ($nota1 + $nota2 + $nota3)/3;
            echo "<strong><br>Média de suas notas: </strong>" . $media ;
        }
        ?>
        </div>
    </div>
</body>

</html>