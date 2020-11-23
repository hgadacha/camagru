<?php

session_start();

require_once($_SERVER['DOCUMENT_ROOT']."/camagru/model/sqlFunctions.php");
require_once($_SERVER['DOCUMENT_ROOT']."/camagru/model/mailFunction.php");

if ((isset($_POST['picture_id']) && isset($_POST['comment']) && isset($_POST['commHour']) && isset($_POST['commDate'])) && 
(!empty($_POST['picture_id']) && !empty($_POST['comment']) && !empty($_POST['commHour']) && !empty($_POST['commDate']))) {

    if(!(empty($_POST['picture_id']))) $picture_id = htmlspecialchars($_POST['picture_id']);
    if(!(empty($_POST['comment']))) $comment = htmlspecialchars($_POST['comment']);
    if(!(empty($_POST['commHour']))) $commHour = htmlspecialchars($_POST['commHour']);
    if(!(empty($_POST['commDate']))) $commDate = htmlspecialchars($_POST['commDate']);
    
    if (strlen($comment) < 250) {

        $author_id = intval($_SESSION['id']);
        $author_username = get_username($author_id);
        $author_username = $author_username[0];

        $id_picture_user = get_user_id($picture_id);
        $id_picture_user = $id_picture_user[0];

        insertNewComment($picture_id, $author_id, $id_picture_user, $comment, $commHour, $commDate);

        //  e-mail part
        $info_picture_user = mail_notif_and_username_recuperation($id_picture_user);

        if ($info_picture_user[0]['notif'] == true) {

            $email_picture_user = $info_picture_user[0]['email'];
            $subject = "Vous avez reçu un nouveau commentaire";
            $body = "
            <img src=\"cid:logo\" alt=\"logo\" style=\"display:block;margin-left:auto;margin-right:auto;width:30%;\">
            <br><br>
            <p style=\"color:#1e272e;font-weight:bold;font-size:17px;border:0;\">".$info_picture_user[0]['username'].", vous avec reçu un nouveau commentaire de ".$author_username.", sur votre photo-montage :
            <br>
            <img src=\"cid:user_image\" alt=\"user_image\" style=\"display:block;margin-left:auto;margin-right:auto;width:20%;\">
            <br>
            <span style=\"text-align:center;font-weight:normal;color:#192a56;\">".$comment."</span>
            </p>
            <br><br><br><br>
            <p style=\"color:#b33939;font-weight:bold;font-size:13px;border:0;\">_____________________________
            <br>
            © 2020 CAMAGRU BY HG4DACHA
            <br>
            ********Tous droits réservés********
            </p>";
            sendmail($email_picture_user, $subject, $body, $picture_id);
        }
    }
    else {
        echo ("Le commentaire n'est pas valide.");
    }
}
else {
    echo ("Le commentaire n'est pas valide.");
}

?>