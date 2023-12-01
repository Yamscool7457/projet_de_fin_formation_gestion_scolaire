<?php
    require_once ("connexion.php");
    //$noms = $_POST["noms"];
    // DateTime l'annee à laquelle on se trouve
    $dats=new dateTime();
    $jour=$dats->format('d/m/Y') ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="inscription.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Inscriptions</span>
				</a>
			</li>
			<li>
				<a href="note.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Notes</span>
				</a>
			</li>
			<li class="active">
				<a href="listeAbsence.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Absence</span>
				</a>
			</li>
			<li>
				<a href="bulletin.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Bulletins</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Parametre</span>
				</a>
			</li>
			<li>
				<a href="../index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Deconnexion</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categorie</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">10</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->



		<!-- **********MAIN********** -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Absences</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Absences</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#"></a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Telechargement PDF</span>
				</a>
			</div>

            <?php
                //vérifier que le bouton ajouter a bien été cliqué
                if(isset($_POST['button'])){
                    //extraction des informations envoyé dans des variables par la methode POST
                    extract($_POST);
                    //verifier que tous les champs ont été remplis
                    if(isset($datedebut) && isset($heureabsence) && isset($motifeabsence)){
                            //connexion à la base de donnée
                            include_once "connexion.php";
                            //requête d'ajout
                            $req = mysqli_query($con , "INSERT INTO absenceeleve VALUES(NULL, '$matricule','$matiere','$nom', '$prenom','$classe',
                            '$datedebut','$heureabsence','$motifeabsence')");
                            if($req){//si la requête a été effectuée avec succès , on fait une redirection
                                header("location: listeAbsence.php");
                            }else {//si non
                                $message = "absence non ajouté";
                            }

                    }else {
                        //si non
                        $message = "Veuillez remplir tous les champs !";
                    }
                }
            
            ?>
            <div class="form abs">
                <a href="listeAbsence.php" class="back_btn"><img src="images/back.png"> Retour</a>
                <h1>Ajouter un absent</h1>
                <p class="erreur_message">
                    <?php 
                    // si la variable message existe , affichons son contenu
                    if(isset($message)){
                        echo $message;
                    }
                    ?>

                </p>

                <form action="" method="post" class="form_rech">
                    <?php
                        // Liste des Matières et Classes
                        $sql_mat = "SELECT * FROM matiere";
                        $result_mat = mysqli_query($conn, $sql_mat) or die(mysqli_connect_error());
                        
                        $sql_classe = "SELECT * FROM classe";
                        $result_classe = mysqli_query($conn, $sql_classe) or die(mysqli_connect_error());
                    ?>

                    <div class="form_rech1">
                        <label for="">Matricule/N° Tel.</label>
                        
                        <input type="search" class="noms" name="noms" placeholder="Matricule ou Telephone" required/>
                        
                    </div>            
                    <button type="submit" name="submit" class="verifier">Rechercher</button>
                </form>

                <?php
                    if (isset($_POST["submit"])){
                        $noms = $_POST["noms"];
                
                        $sql = "SELECT * FROM inscription_eleves WHERE matricule = '$noms' OR nom ='$noms'";
                        $rs = mysqli_query($conn, $sql) or die(mysqli_connect_error());
                        
                        if($ET=mysqli_fetch_assoc($rs)){    ?>


                            <form action="" method="POST">
                                <div class="absence">
                                    <div>
                                        <fieldset>
                                            <legend>Information de l'élève</legend>

                                            <label>Matricule</label>
                                            <input type="text" name="matricule" readonly value="<?php echo($ET["matricule"])?>"><br>
                                            <label>Nom</label>
                                            <input type="text" name="nom" readonly value="<?php echo($ET["nom"])?>"><br>
                                            <label>Prénom</label>
                                            <input type="text" name="prenom" readonly value="<?php echo($ET["prenom"])?>"><br>
                                            <label>Classe</label>
                                            <input type="text" name="classe" readonly value="<?php echo($ET["classe"])?>">
                                        </fieldset>
                                    </div>
                                    
                                    <div>
                                        <fieldset>
                                            <legend>Information complementaires</legend>
                                            
                                            <label>Matiere</label>
                                            <select name="matiere" id="">
                                                <?php while($row1 = mysqli_fetch_array($result_mat)):;?>
                                                    <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
                                                <?php endwhile ?>
                                            </select><br>
                                            <label>Date</label>
                                            <input type="date" name="datedebut" value="<?php echo($jour)?>" required><br>
                                            <label>Heure</label>
                                            <input type="time" name="heureabsence" required><br>
                                            <label>Motif</label>
                                            <input type="text" name="motifeabsence" required><br>
                                        </fieldset>
                                            <input type="submit" value="Ajouter" name="button">
                                    </div>
                                </div>
                            </form>

                        <?php   }
                    }
                
                    else{   ?>
                        <link rel="stylesheet" href="style.css">
                        <h1 class="msg">
                            <?php echo "Rien à afficher ,"; ?><br> 
                            <?php echo "Merci de bien remplir le champs à nouveau !!"; ?><br>
                        </h1> 
                    <?php   }
                ?>    
            </div>
        </main>
		<!-- **********MAIN********** -->


	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>