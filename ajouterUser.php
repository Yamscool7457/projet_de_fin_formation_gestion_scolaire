<?php
    require_once("connexion.php");
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mp=$_POST['mp'];

    //vérifier que le bouton ajouter a bien été cliqué
    if(isset($_POST['register'])){
        //extraction des informations envoyé dans des variables par la methode POST
        extract($_POST);
        //verifier que tous les champs ont été remplis
        if(isset($nom ) && isset($prenom) && isset($email) && isset($mp)){
                //connexion à la base de donnée
                include_once "connexion.php";
                //requête d'ajout
                $sql = "INSERT INTO users (nom, prenom, email, pasword) 
                    VALUES('$nom','$prenom','$email', '$mp')";
                $req = mysqli_query($conn , $sql);
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: index.php");
                }else {//si non
                    $message = "Utilisateur non ajouté";
                }

        }else {
            //si non
            $message = "Veuillez remplir tous les champs !";
        }
    }

?>
                            <p class="erreur_message">
                                <?php 
                                // si la variable message existe , affichons son contenu
                                if(isset($message)){
                                    echo $message;
                                }
                                ?>
                             </p>