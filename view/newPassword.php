<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/camagru/public/css/newPassword.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/camagru/public/pictures/logo_camagru.png" />
    <title>Réinitialiser le mot de passe - Camagru</title>
</head>
<body>
    <div id="contenu">
        <div id="on_frame">
            <div id="frame">
                <img id="logo" src="../public/pictures/Camagru.png" alt="logo"/>
                <img id="locked" src="../public/pictures/locked.png" alt="locked"/>    
                <p id="phrase">Entrez votre adresse e-mail,
                vous recevrez<br/>un lien pour récuperer votre compte.</p>
                <form method="post" action="inscription.html">
                    <input id="email" type="text" name="email" id="email"
                    placeholder="Entrez votre adresse e-mail" 
                    size="30" maxlength="75"/>
                    <button type="submit">Envoyer un mail de réinitialisation</button>
                    <p><a href="../index.php">Revenir à l'écran de connexion</a></p>
                </form>
            </div>
        </div>
        <footer>
            <p id="rights">© 2020 CAMAGRU BY HG4DACHA</p>
        </footer>
    </div>
</body>
</html>