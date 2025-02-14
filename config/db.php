<?php 
    <?php
    // Configurações do banco de dados
    $host = 'localhost';      // Servidor do banco de dados
    $dbname = 'gerenciador_php';      // Nome do banco de dados
    $username = 'root';       // Usuário do banco de dados
    $password = '';           // Senha do banco de dados (deixe vazia se estiver usando XAMPP)
    
    // Configurar conexão com o MySQL usando PDO
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }
    ?>
    
?>