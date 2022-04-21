<?php
    /*---------------------------------------
                    IMPORT
    -----------------------------------------*/
    //importer la connexion à la bdd
    include '../Utils/bdd_connect.php';
    //importer le model
    include '../Model/model_article.php';
    //importer la vue(interface)
    include '../Vue/vue_article.php';

    /*---------------------------------------
                    TEST
    -----------------------------------------*/
    //test si le bouton submit à été cliqué
        //test pour vérifier si les champs du formulaire sont remplis
        if(isset($_POST['nom_article']) AND isset($_POST['prix_article']) AND 
            $_POST['nom_article'] !='' AND $_POST['prix_article'] !='' ){
            //stocker les super globales POST dans des variables
            $nom =$_POST['nom_article'];
            $prix =$_POST['prix_article'];
            //appel de la fonction ajouter  un user en BDD
            adduser($bdd, $nom, $prix) ;
            //message
            echo "$nom à été ajouté en  BDD";
        }
        //sinon vides
        else{
            echo 'Veuillez compléter les champs du formulaire';
        }
?>