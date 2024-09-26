<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="php/cadastrar.php" method="GET"><!--a ação do formulário vai ser enviar as coisas disso aqui pro cadastrar 
        pelo método get-->
    <!-- get pega os dados por URL-->
    <!--O metodo Post usa os arquivos temporários-->
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="password" name="senha" placeholder="Senha"><br>
        <input type="email" name="email" placeholder="Email"><br>
<!--type:tipo da caixinha; name:nome da caixinha pra capturar os dados; placeholder:texto dentro da caixinha-->
        <input type="submit" value="Enviar"><!--esse é o botão responsável por enviar as coisas-->
    </form>
</body>
</html>