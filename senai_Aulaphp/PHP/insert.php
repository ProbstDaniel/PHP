<!-- PHP para configurar e conectar ao banco de dados -->
<?php
        // Define as variáveis com as credenciais de conexão ao banco de dados
        $host = 'localhost';          // Endereço do servidor do banco de dados
        $db = 'senai_aulaphp';        // Nome do banco de dados
        $user = 'Daniel Probst';            // Nome do usuário do banco de dados
        $pass = '123456';                // Senha do usuário
        $port = 3307;                 // Porta de conexão (padrão do MySQL)
        
        // Inclui o arquivo PHP que contém a classe 'Database' para fazer a conexão com o banco de dados
        // Porta MySQL correta
        // Inclui o arquivo da classe Database que criamos para conectar dentro da pasta php
        require_once 'C:\xampp\htdocs\aula-php\php\conection.php';
        // Cria uma instância da classe Database
        // Instancia um novo objeto da classe 'Database', passando os parâmetros de conexão
        $database = new Database($host, $db, $user, $pass, $port);
            // Chama o método connect para estabelecer a conexão
        // Chama o método 'connect()' para realizar a conexão com o banco de dados
        $database->connect();
        
        // Obtém a conexão PDO criada pela classe 'Database'
        $pdo = $database->getConnection();

        if($pdo){
          try{
            $stmt = $pdo->prepare("INSERT into usuario(nome, senha) values('Valquer', '123456');");
            $stmt->execute();
          }
          catch(PDOException $e){
            echo "Erro ao consultar o banco de dados: " . $e->getMessage() . "<br>";
          }
          }
        
    ?>