<?php

$bdd = new PDO ('mysql:host=localhost;dbname=camagru', 'root', 'MAMP93', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(isset($_POST['submit_inscription']))
{
    if(!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password2']))
    {
        $lastname = htmlspecialchars($_post['lastname']);
        $firstname = htmlspecialchars($_post['firstname']);
        $email = htmlspecialchars($_post['email']);
        $username = htmlspecialchars($_post['username']);
        $password = htmlspecialchars($_post['password']);
        $password2 = htmlspecialchars($_post['password2']);

        $lastname_length = strlen($lastname);
        $firstname_length = strlen($firstname);
        $email_length = strlen($email);
        $username_length = strlen($username);
        $password_length = strlen($password);
        $password2_length = strlen($password2);

        if($lastname_length <= 250 && $firstname_length <= 250 && $email_length <= 250 && $username_length <= 250 && $password_length <= 250 && $password2_length <= 250)
        {
            if(password == password2)
            {

            }
            else
            {
                $error = "Les mots de passes ne correspondent pas";
            }
        }
        else
        {
            $error = "Vous pouvez entrer 250 caractères maximum";
        }
    }
    else
    {
        $error = "Tous les champs doivent être complétés !";
    }
}

?>