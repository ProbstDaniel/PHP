<?php
        //Conexão com o banco
        $host = 'localhost';
        $db = 'senai_aulaphp';
        $user = 'Daniel Probst';
        $pass = '123456';
        $port = 3307; 
        require_once 'connection.php';
        $database = new Database($host, $db, $user, $pass, $port);
        $database->connect();
        $pdo = $database->getConnection();
/* --------------------
 Recuperação de dados form
-----------------------*/

    //declara as variáveis pra ficar mais fácil de puxa-las
    $nome= $_GET['nome'];
    $email= $_GET['email'];
    $senha= $_GET['senha'];
    echo($nome."<br>".$email."<br>");

/* --------------------
insere os dados no banco
-----------------------*/
    $stmt = $pdo->prepare("INSERT into usuario(nome, senha, email)
     values('$nome', '$senha', '$email');");
            $stmt->execute();
    //echo($_GET['nome'])."<br>"($_GET['email'])."<br>"($_GET['senha']);
    //== é igual
    // = é comparação

   /* if($email == "daniel@aluno.senai.br" && $senha == "123456"){
        echo("Login feito com sucesso");
    }else{
    echo("Login ou senha incorretos");
    }*/

// o "." no php contatena os valore
?>