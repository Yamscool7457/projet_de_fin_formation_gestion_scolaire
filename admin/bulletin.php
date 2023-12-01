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

	<title>Buletin</title>
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
			<li>
				<a href="listeAbsence.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Absence</span>
				</a>
			</li>
			<li class="active">
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
					<h1>Bulletins</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bulletins</a>
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

			<div class="main">
				<h1>Bulletins de notes</h1>
				<form action="" method="post" class="form_rech">
					<?php
						// Liste des Matières et Classes
						$sql_mat = "SELECT * FROM matiere";
						$result_mat = mysqli_query($conn, $sql_mat) or die(mysqli_connect_error());
						
						$sql_classe = "SELECT * FROM classe";
						$result_classe = mysqli_query($conn, $sql_classe) or die(mysqli_connect_error());
					?>
		
					<div class="form_rech1">
						<label for="">Classe</label>
						<select name="LaClasse" id="">
							<?php while($row1 = mysqli_fetch_array($result_classe)):;?>
								<option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
							<?php endwhile ?>
						</select>
					</div>
		
					<div class="form_rech1">
						<label for="">Trimestre</label>
						<select name="LaClasse" id="">
                            <option>1er Trimestre</option>
                            <option>2eme Trimestre</option>
                            <option>3eme Trimestre</option>
						</select>
					</div>
					
					<button type="submit" name="submit" class="verifier">Rechercher</button>
				</form>
		
				<form action="upload_note.php" method="post">
					<table>
						<thead>
							<tr>
								<td>Noms</td>
								<td>Classe</td>
								<td>Trimestre</td>
								<td>Total Coef.</td>
								<td>Pondérée</td>
								<td>Moyenne</td>
								<td>Rang</td>
							</tr>
						</thead>
		
						<tbody>
							<tbody>
								<?php
									$sql = "SELECT * FROM trimestre";
									$rs = mysqli_query($conn, $sql) or die(mysqli_connect_error());
							
										while($ET=mysqli_fetch_assoc($rs)){
									
										$matricule = $ET["matricule"];
										$pond = $ET["ponderee"];
										$moy = $ET["moyenne"];
										$coef = $ET["coefficient"];
										$moy = ($pond / $coef);   ?>
		
										<div class="tabble_coprs">
											<tr>
												<td class="md-2 mt-2"><?php echo($ET["nom"])?></td>
												<td class="md-2 mt-2"><?php echo($ET["classe"])?></td>
												<td class="md-2 mt-2"><?php echo($ET["trimestre"])?></td>
												<td class="md-2 mt-2" name="coeff"><?php echo($coef)?></td>
												<td class="md-2 mt-2"><input type="number" name="note1" value="<?php echo($pond)?>"></td>
												<td class="md-2 mt-2"><input type="number" name="note2" value="<?php echo($moy)?>"></td>
												<td class="md-2 mt-2"><?php echo($ET["rang"])?></td>
											</tr>
										</div>
									<?php }
								?>
							</tbody>
						</tbody>
					</table>
		
					<button class="table_btn" type="submit">Envoyer</button>
				</form>        
			</div>	
		</main>
		<!-- **********MAIN********** -->


	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>