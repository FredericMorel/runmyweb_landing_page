<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue sur RunMyWEb <br> nous vous proposons la création de votre site web</h1>
    <h2>Augmenter votre visibilité sur le net</h2>
    <p>Grace à votre site web</p>

    <?php
  
    require_once ("database/MyPDO.php");
    echo "<br><br>";
    $pdo = MyPDO::getPDO();
    $statement = $pdo->prepare("SELECT * from users");
    $statement->execute();
    $users= $statement->fetchAll();
    echo '<br>';

   
    foreach ($users as $user) {
        echo "Entreprise :".$user['companyname']."<br>";
        echo $user['lastname']."<br/>";
        echo $user['firstname']."<br/>";
        
       // echo $user['company_name']."<br/>";
    }
    

    ?>
    
    </body>
</html>