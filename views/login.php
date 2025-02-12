<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/medium.css">
    <link rel="stylesheet" href="../assets/css/large.css">
    <title>Gerenciador de consteúdos PHP - login</title>
</head>
<body>
    <?php 
        include 'includes/header.php';
    ?>
    
    <main id="content" class="form-layout">
        <section class="container">
            <h1>Login</h1>
            <form id="form-login" method="post">
                <label for="user">Usuário</label>
                <input type="text" name="user" id="user" placeholder="Digite o nome do usuário">

                <label for="pass">Senha</label>
                <input type="password" name="pass" id="pass" placeholder="Digite sua senha">

                <input type="submit" value="Entrar">
            </form>
        </section>
    </main>
       

    <?php 
        include 'includes/footer.php';
    ?>

    <script src="../assets/js/menu.js"></script>
</body>
</html>