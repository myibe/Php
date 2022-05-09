<?php
session_start();

if ($_POST) {
    // Le tableau $_POST contient des données
    // isset permet de verifier si une variable existe, si on ajoute une clé alpha numérique 
    // dans un tableau cela permet de vérifier que la clé existe.
    if (isset($_POST['password'])) {
        // La clé "password" existe

        if ($_POST['password'] == '123') {
            // le mot de passe est correct

            $_SESSION['connected'] = true;

            // redirection vers la page privée
            $url = '/private-page.php' ;
            header("Location: $url", 302);
            exit();
        }
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login.php" method="post">
        <input type="text" name="password" placeholder="password">
        <button type="submit">OK</button>
    </form>
    
</body>
</html>