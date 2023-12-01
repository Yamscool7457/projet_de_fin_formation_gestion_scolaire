
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

         //connexion à la base de donnée
          include_once "connexion.php";
         //on récupère le id dans le lien
          $id = $_GET['id'];
          //requête pour afficher les infos d'un absent
          $req = mysqli_query($con , "SELECT * FROM absenceeleve WHERE id = $id");
          $row = mysqli_fetch_assoc($req);


       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($matricule) && isset($matiere) && isset($nom) && isset($prenom) && isset($classe) && isset($datedebut)&& isset($heureabsence) && $motifeabsence ){
               //requête de modification
               $req = mysqli_query($con, "UPDATE absenceeleve SET matricule = '$matricule', matiere = '$matiere' , nom = '$nom' , prenom = '$prenom' , classe = '$classe' , 
               datedebut = '$datedebut' , heureabsence = '$heureabsence' , motifeabsence = '$motifeabsence'  WHERE id = $id");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: listeAbsence.php");
                }else {//si non
                    $message = "absences non modifié";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="listeAbsence.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h1>Modifier les absents : <?php echo $row['matricule']?> </h1>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">

            <?php require_once ("../conexion.php");
                // Liste des Matières et Classes
                $sql_mat = "SELECT * FROM matiere";
                $result_mat = mysqli_query($conn, $sql_mat) or die(mysqli_connect_error());
            ?>

            <div class="absence">
                <div>
                    <fieldset>
                        <legend>Information de l'élève</legend>

                        <label>Matricule</label>
                        <input type="text" name="matricule" value="<?php echo ($row['matricule'])?>" readonly><br>
                        <label>Nom</label>
                        <input type="text" name="nom" value="<?php echo ($row['nom'])?>" readonly><br>
                        <label>Prénom</label>
                        <input type="text" name="prenom" value="<?php echo ($row['prenom'])?>" readonly><br>
                        <label>Classe</label>
                        <input type="text" name="classe" value="<?php echo ($row['classe'])?>" readonly>
                    </fieldset>
                </div>
                
                <div>
                    <fieldset>
                        <legend>Information complementaires</legend>

                        <label>Matiere</label>
                        <select name="matiere" id="">
                            <option value="<?php echo ($row['matiere'])?>">
                                <?php echo ($row['matiere']); ?>
                            </option>
                                
                            <?php while($row1 = mysqli_fetch_array($result_mat)):;?>
                                <option value="<?php echo $row1[1]; ?>">
                                    <?php echo $row1[1]; ?>
                                </option>
                            <?php endwhile ?>
                        </select><br>

                        <label>Date</label>
                        <input type="date" name="datedebut" value="<?php echo ($row['datedebut'])?>"><br>
                        <label>Heure</label>
                        <input type="text" name="heureabsence" value="<?php echo ($row['heureabsence'])?>"><br>
                        <label>Motif</label>
                        <input type="text" name="motifeabsence" value="<?php echo ($row['motifeabsence'])?>">
                    </fieldset>
                        <input type="submit" value="Modifier" name="button">
                </div>
            </div>
        </form>
    </div>
    </main>
		<!-- **********MAIN********** -->


	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>