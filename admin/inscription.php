<?php require_once ("connexion.php");
    // Liste des Matières et Classes
    $sql_mat = "SELECT * FROM classe";
    $result_clas = mysqli_query($conn, $sql_mat) or die(mysqli_connect_error());
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

	<title>inscription</title>
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
			<li class="active">
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
			<li>
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
					<h1>Inscriptions</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Inscriptions</a>
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

			<div class="ins_eleve">
				<h1>Enregistrements des élèves</h1>
				<form action="ajouterEleve.php" method="post" enctype="multipart/form-data">
					<div class="eleve">
						<!-- information consernant l'eleve -->
						<fieldset>
							<legend>Information de l'élève</legend>

							<label for="">Matricule</label>
							<input type="text" name="matricule" placeholder="Votre Matricule" required><br>

							<label for="">Nom</label>
							<input type="text" name="nom" placeholder="Votre Nom" required><br>

							<label for="">prenom</label>
							<input type="text" name="prenom" placeholder="Votre Prenom" required><br>

							<label for="">Age</label>
							<input type="text" name="age" placeholder="Votre Age" required><br>

							<label for="">Lieux </label>
							<input type="text" name="lieux" placeholder="lieux de naissance" required><br>

							<label for="">Tel</label>
							<input type="number" name="tel" placeholder=" Votre numero de telephone" required><br>

							<label for="">Email</label>
							<input type="email" name="email" placeholder="Votre Email"><br>

							<label for="">Sexe</label>
							<input type="radio" name="sexe" value="H" ><label class="lb_homme">Homme</label> 
							<input type="radio" name="sexe" value="F"><label class="lb_femme">Femme</label><br>

							<label for="">Classe</label>
							<select name="classe" class="select">
								<option value="Indefinie">
									<?php echo "- - - - - - -"; ?>
								</option>

								<?php while($row1 = mysqli_fetch_array($result_clas)):;?>
									<option value="<?php echo $row1[1]; ?>">
										<?php echo $row1[1]; ?>
									</option>
								<?php endwhile ?>
							</select><br>

							<label for="">Photo</label>
							<input type="file" name="photo" placeholder="Votre photo"><br>
						</fieldset>
					</div>

					<div class="titeur">
						<!-- inforfarmation consernant le tUteur de l'eleve -->
						<fieldset>
							<legend>Information du tuteur</legend>

							<label for="">Nom et prenom</label>
							<input type="text" name="nomTuteur" placeholder="Nom et prenom du tuteur ou tutrice" required> <br>

							<label for="">Profession</label>
							<input type="text" name="professionTuteur" placeholder="profession du tuteur ou tutrice" required> <br>

							<label for="">Contacte</label>
							<input type="text" name="telTuteur" placeholder="telephone du tuteur ou tutrice" required><br>

							<label for="">Adresse</label>
							<input type="text" name="adresseTuteur" placeholder="Adresse du tuteur ou tutrice" required> <br>
						</fieldset>
					
						<input type="submit" value="Valider"><br>
						<h3>Vous pouvez voire la liste des élèves ci-dessous</h3>
						<button><a href="listeEleve.php" class="liste">liste des élèves</a></button>                    
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