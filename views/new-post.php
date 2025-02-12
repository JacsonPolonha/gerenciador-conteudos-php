<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/medium.css">
    <link rel="stylesheet" href="../assets/css/large.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'includes/header.php';
    ?>
     <main id="content" class="form-layout">
        <section class="container">
            <h1>Novo Post</h1>
            <form id="form-login" method="post">
                <label for="title">Titulo</label>
                <input type="text" name="title" id="title" placeholder="Digite o título  do post">

                <label for="text">Conteúdo</label>
                <textarea name="text" id="text" cols="30" rows="10" placeholder="Digite o conteúdo do post aqui"></textarea>

                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>

    <?php 
        include 'includes/footer.php';
    ?>

    <script src="../assets/js/menu.js"></script>
</body>
</html>