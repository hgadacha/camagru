<?php

session_start();

if (empty($_SESSION))
{
    header('location: /camagru/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/camagru/public/css/home.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../public/pictures/logo_camagru.png" />
    <title>Acceuil - Camagru</title>
</head>
<body>
    <div id="contenu">
        <?php include("includes/header.php") ?>
        <nav>
            <ul>
                <li class="this"><a href="/camagru/view/home.php" class="this"><img id="home" src="/camagru/public/pictures/home_red.png" alt="Acceuil">Acceuil</a></li>
                <div class="border"></div>
                <li class="other"><a href="/camagru/view/gallery.php" class="other"><img id="gallery" src="/camagru/public/pictures/gallery_black.png" alt="Galerie">Galerie</a></li>
                <div class="border"></div>
                <li class="other"><a href="/camagru/view/camera.php" class="other"><img id="camera" src="/camagru/public/pictures/camera_black.png" alt="Camera">Camera</a></li>
                <div class="border"></div>
                <li class="other"><a href="/camagru/view/profile.php" class="other"><img id="profile" src="/camagru/public/pictures/profile_black.png" alt="Profile">Profil</a></li>
                <div class="border"></div>
            </ul>
        </nav>
        <section>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum nisi at magna ullamcorper, vel congue nisl fringilla. Aliquam ornare mollis magna, sed consectetur elit rhoncus eget. Cras sed magna vel arcu molestie suscipit vitae quis justo. Mauris cursus dui eget urna iaculis, eget feugiat odio laoreet. Nulla quis urna ut purus varius iaculis vitae et tellus. Aenean scelerisque auctor nunc sed luctus. Vivamus eleifend ligula eu ex fringilla, sit amet imperdiet orci commodo. Pellentesque nec pulvinar tellus. Suspendisse at orci tempus urna blandit ullamcorper. Phasellus ac mollis massa, non auctor orci. Quisque laoreet luctus mi, eu varius metus cursus id. Nunc vel velit interdum, sagittis tellus a, placerat nulla. Sed nulla erat, fringilla non pulvinar a, convallis vel sapien. Fusce at lorem sit amet lectus ultrices gravida. Etiam magna nisl, tempus ullamcorper arcu id, elementum efficitur nibh.<br/><br/>
        </section>
        <?php include("includes/footer.php") ?>
    </div>
</body>
</html>