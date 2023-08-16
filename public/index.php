<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunMyWeb</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Bienvenue sur RunMyWEb ou nous vous proposons la création de votre site web</h1>
    <h2>test</h2>
    <p>ceci est un test</p>
    <?php
    require_once "/Applications/MAMP/htdocs/runmyweb_landing_page/models/database.php"
    ?>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }

    switch ($page) {
        case 'landingPages':
            include('landingPages.php');
            break;
      //  case 'contact':
       //     include('contact.php');
      //      break;
            // ajoutez ici d'autres cas pour les autres pages
      //  default:
      //      include('404.php');
    }
    ?>
    <a href="../../runmyweb_landing_page/views/landingPages.php" target="_blank" rel="noopener noreferrer">accueil</a>
    <?php
    var_dump($_GET);
    ?>
</body>

</html>