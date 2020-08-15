<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Fichiers Cachés</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "votremdpici") // Si le mot de passe est bon
    {
     
       
    ?>

         
      <h1>Liste des Fichiers cachés</h1>
            <ul>
            <li><a href="https://jeanstaffe.yo.fr/multim/dossiersecret/5zjfnZEG63ZRg85zerFG/">Top Secret</a></li>
            
            </ul> 


        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect, <a href="https://jeanstaffe.yo.fr/multim/dossiersecret/">Cliquez ici pour réessayer</a></p>';
    }
    ?>
    
        
    </body>
</html>