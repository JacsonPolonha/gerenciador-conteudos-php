<?php
require 'config/db.php';

if ($pdo) {
    echo "✅ Conexão com o banco de dados bem-sucedida!";
} else {
    echo "❌ Falha na conexão!";
}
?>
