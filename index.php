<?php
if(!empty($_GET['deconnexion'])){
    setcookie("username","",time()-60);
    unset($_COOKIE['username']);
}

if(isset($_POST["connexion"])){
    setcookie("username",$_POST['username'],time()+60*60*24);
    header("location:index.php");
}
if(!empty($_COOKIE['username'])){
    echo "<p>Welcome ".$_COOKIE['username']."</p>";
    echo "<a href='index.php?deconnexion=true'>Deconnexion</a>";
}else{
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
        </form>
    </body>
    </html> 
    <?php
}
    ?>

