<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h1>BEM-VINDO AO SGI-CITeB</h1>
        <h2>LOGIN</h2>
        
        <?php
         if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>

        <label>Nome de usuário: </label>
        <input type="text" name="uame" placeholder="Ex: kaue "><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="senha"><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
