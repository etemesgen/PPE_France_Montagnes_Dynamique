# &lt; / &gt;France Montagne (site dynamique) : SQL, PHP

J'ai mis en place le site France Montagnes en dynamique pour la partie des images (du grid), par la création d'une base de données **vacances** et d'une table **offre**.

## Création de la table 

```php
    id_offre,   type=int
    image, 		type=varchar
    titre, 		type=varchar
    contenu,	type=text
```

## insertion des données

![table](./asset/bdd.PNG "table")

## Connection php pour la base de donnée par l'objet **PDO**
```php
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


## Résultat final dans le navigateur :

![page](./asset/page-complete "france montagnes")



