<?php
    //selectionner la base
    try{// On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=vacances', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `offre` WHERE 1');

    
    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()){
    echo '  
        <section id="grid">
             <img src="'.$donnee['image'].'"> 
             
             <p>'.$donnee['titre'].' <br><br> 
             <span>'.$donnee['contenu'].'</span></p>  
           </section>    ';

       }
    $reponse->closeCursor(); // Termine le traitement de la requête

    }
    //partie finale
    catch(Exception $e){
    // En cas d'erreur précédemment, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
    }
?>
