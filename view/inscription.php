<?php
require('../controller/submit_inscription.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/inscription.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../public/pictures/logo_camagru.png" />
    <title>Inscription - Camagru</title>
</head>
<body>
    <div id="contenu">
        <div id="on_frame">
            <div id="frame">
                <img id="logo" src="../public/pictures/Camagru.png" alt="logo"/>    
                <p id="phrase">Inscrivez-vous pour pouvoir commenter,<br/>
                liker ou poster des images.</p>
                <form method="post" action="inscription.php">
                    <input class="row" type="text" name="lastname" id="lastname"
                    placeholder="Nom (ex : Dupont)" 
                    size="30" maxlength="250" value="<?php if(isset($lastname)) { echo $lastname; } ?>"/>
                    <input class="row" type="text" name="firstname" id="firstname"
                    placeholder="Prénom (ex : Jean)" 
                    size="30" maxlength="250" value="<?php if(isset($firstname)) { echo $firstname; } ?>"/>
                    <input class="row" type="email" name="email" id="email"
                    placeholder="Adresse e-mail (jean.dupont@exemple.com)" 
                    size="30" maxlength="250" value="<?php if(isset($email)) { echo $email; } ?>"/>
                    <input class="row" type="text" name="username" id="username"
                    placeholder="Nom d'utilisateur (pseudonyme)" 
                    size="30" maxlength="250" value="<?php if(isset($username)) { echo $username; } ?>"/>
                    <input class="row" type="password" name="password" id="password"
                    placeholder="Mot de passe" size="30" maxlength="250"/>
                    <input id="last" type="password" name="password2" id="password2"
                    placeholder="Confirmez le mot de passe" size="30" maxlength="250"/>
                    <button type="submit" name="submit_inscription">S'inscrire</button>
                    <p>Vous avez déjà un compte ? <a href="../index.html">Connectez-vous</a></p>
                    <p id="error">
                        <?php
                        if (isset($error))
                        {
                            echo $error;
                        }
                        ?>
                    </p>
                </form>
            </div>
        </div>
        <footer>
            <p id="rights">© 2020 CAMAGRU BY HG4DACHA</p>
        </footer>
    </div>
</body>
</html>