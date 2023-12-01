
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

			<div class="abs_liste">
				<a href="ajouterAbsence.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
				
				<table>
					<thead>
						<tr id="items">
							<th>Matricule</th>
							<th>Matiere</th>
							<th>Noms</th>
							<th>Classe</th>
							<th>Date</th>
							<th>heure</th>
							<th>Motife</th>
							<th>Edit.</th>
							<th>Supp.</th>
						</tr>                
					</thead>

					<?php 
						//inclure la page de connexion
						include_once "connexion.php";
						//requête pour afficher la liste des absences
						$req = mysqli_query($con , "SELECT * FROM absenceeleve");
						if(mysqli_num_rows($req) == 0){
							//s'il n'existe pas d'absents dans la base de donné , alors on affiche ce message :
							echo "Il n'y a pas encore d'absents ajouter !" ;
							
						}else {
							//si non , affichons la liste de tous les absents
							while($row=mysqli_fetch_assoc($req)){
								?>
								<tr>
									<td><?php echo ($row['matricule'])?></td>
									<td><?php echo ($row['nom'])?>
										<?php echo ($row['prenom'])?>
									</td>
									<td><?php echo ($row['matiere'])?></td>
									<td><?php echo ($row['classe'])?></td>
									<td><?php echo ($row['datedebut'])?></td>
									<td><?php echo ($row['heureabsence'])?></td>
									<td><?php echo ($row['motifeabsence'])?></td>
									<!--Nous alons mettre l'id de chaque absent dans ce lien -->
									<td class="cell_icon"><a href="modifierAbsence.php?id=<?php echo ($row['id'])?>"><img src="images/pen.png"></a></td>
									<td class="cell_icon"><a onclick='return confirmation ();' href="supprimerAbsence.php?id=<?php echo ($row['id'])?>"><img src="images/trash.png"></a></td>
								</tr>
								<script>
									function confirmation () {
										var x = confirm("Voulez-vous vraiment supprimer cette information ?");
										if(x==true) {
											// Ok
											return true;
										}
										else {
											// Cancel
											return false;
										}
									}
								</script>
								<?php
							}
							
						}
					?>
			
				
				</table>
			</div>
		</main>
		<!-- **********MAIN********** -->


	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>