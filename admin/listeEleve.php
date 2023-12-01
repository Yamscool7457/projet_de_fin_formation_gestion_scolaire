<?php
require_once("connexion.php");
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
							<a href="#">Liste</a>
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
                <h1>Liste des eleves</h1>
                <form action="listeEleveRech.php" method="post" class="form_rech">
                    <?php
                        // Liste des Classes
                        $sql_classe = "SELECT * FROM classe";
                        $result_classe = mysqli_query($conn, $sql_classe) or die(mysqli_connect_error());
                    ?>

                    <div class="form_rech1">
                        <label for="">Classe</label>
                        <!--
                        <input type="search" name="LaClasse" placeholder="Classe" required/>
                        -->
                        <select name="LaClasse" id="">
                            <?php while($row1 = mysqli_fetch_array($result_classe)):;?>
                                <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
                            <?php endwhile ?>
                        </select>
                    </div>
                    
                    <button type="submit" name="submit" class="verifier">Rechercher</button>
                </form>

                <div class="liste_eleve">
                    <table class="table_liste">
                        <thead>
                            <tr>
                                <td>Code</td>
                                <td>Photo</td>
                                <td>Noms</td>
                                <td>Classe</td>
                                <td>Age</td>
                                <td>lieu</td>
                                <td>Tel</td>
                                <td>Sexe</td>
                                <!-- information Tuteur -->
                                <td>Nom Tuteur</td>
                                <td>Contacte</td>
                                <td>Actions</td>
                            </tr>
                        </thead>

                        <?php
                            $req = "select * from inscription_eleves";
                            $rs = mysqli_query($conn, $req) or die (mysqli_connect_error());
                            while($elev=mysqli_fetch_assoc($rs)) {
                        ?>

                        <tbody>
                            <tr>
                                <td>#<?php  echo ($elev['code']) ?></td>
                                <td><img src="new_photo/<?php  echo ($elev['photo'])?>"> </td>
                                <td><?php  echo ($elev['nom']) ?>  
                                    <?php  echo ($elev['prenom']) ?>
                                </td>
                                <td><?php  echo ($elev['classe']) ?></td>
                                <td><?php  echo ($elev['age']) ?></td>
                                <td><?php  echo ($elev['lieu']) ?></td>
                                <td><?php  echo ($elev['tel']) ?></td>
                                <td><?php  echo ($elev['sexe']) ?></td>
                                <!-- tuteur ou tutrice -->
                                <td><?php  echo ($elev['nomTuteur']) ?></td>
                                <td><?php  echo ($elev['telTuteur']) ?></td>

                                <td class="cell_icon">
									<a href="editerEleve.php?code=<?php  echo ($elev['code'])?>"><img src="images/pen.png"></a>
                                	<a onclick='return confirmation ();' href="supprimerEleve.php?code=<?php  echo ($elev['code'])?>"><img src="images/trash.png"></a>
								</td>
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
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
		</main>
		<!-- **********MAIN********** -->


	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>