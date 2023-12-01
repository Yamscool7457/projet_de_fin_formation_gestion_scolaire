<?php
require_once("connexion.php");
$code=$_GET['code'];
$req="select * from inscription_eleves where(CODE=$code)";
$rs=mysqli_query($conn, $req) or die (mysqli_connect_error());
$elev = mysqli_fetch_assoc($rs);


// header("location:listeEleve.php");
// require_once("listeEleve.php");
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
            <div class="ins_eleve">
                <h1>Modifier les donnée de l'élèves</h1>
                <form action="modifierEleve.php" method="post" enctype="multipart/form-data">
                    <div class="eleve">
                        <fieldset>
                            <legend>information de l'élève</legend>
                            
                            <img src="new_photo/<?php echo($elev['photo'])?>" alt=""> 

                            <label for="" id="plan">Code </label>
                            <input type="text" name="code" value="<?php echo ($elev['code'])?>" readonly="true" id="plan"> <br>

                            <label for="">Nom</label>
                            <input type="text" name="nom" value="<?php echo ($elev['nom'])?>"> <br>
                            
                            <label for="">prenom</label>
                            <input type="text" name="prenom"  value="<?php echo ($elev['prenom'])?>"> <br>
                            
                            <label for="">Age</label>
                            <input type="text" name="age" value="<?php echo ($elev['age'])?>"> <br>
                            
                            <label for="">Lieux</label>
                            <input type="text" name="lieux" value="<?php echo ($elev['lieu'])?>"><br>
                            
                            <label for="">Tel</label>
                            <input type="number" name="tel"  value="<?php echo ($elev['tel'])?>" > <br>
                            
                            <label for="">Email</label>
                            <input type="email" name="email" value="<?php echo ($elev['email'])?>" ><br>
                            
                            <label for="">sexe</label>
                            <input type="radio" name="sexe" value="<?php echo ($elev['sexe'])?>"><label for="" class="lb_homme">Homme</label>
                            <input type="radio" name="sexe" value="<?php echo ($elev['sexe'])?>"><label for="" class="lb_femme">Femme</label><br>
                            
                            <label for="">Classe</label>
                            <input type="text" name="classe" value="<?php echo ($elev['classe'])?>"><br>
                            <label for="">photo</label>
                            <input type="file" name="photo" placeholder="Votre photo"> <br>
                        </fieldset>
                    </div>


                    <div class="tuteur">
                        <fieldset>
                            <legend>Information du tuteur</legend>
                            <!-- information tuteur ou tutrice -->
                            
                            <label for="">Nom et Prenom </label>
                            <input type="text" name="nomTuteur" value="<?php echo ($elev['nomTuteur'])?>"><br>
                            
                            <label for="">Profession</label>
                            <input type="text" name="professionTuteur"  value="<?php echo ($elev['professionTuteur'])?>"><br>
                            
                            <label for="">Cntacte</label>
                            <input type="text" name="telTuteur" value="<?php echo ($elev['telTuteur'])?>"><br>
                            
                            <label for="">adresse</label>
                            <input type="text" name="adresseTuteur"  value="<?php echo ($elev['adresseTuteur'])?>"><br>
                        </fieldset>

                        <input type="submit" value="Valider"><br>
						<h3 id="plan">Vous pouvez voire la liste des élèves ci-dessous</h3>
                        <button id="plan"><a href="listeEleve.php" class="liste">liste des élève</a></button>
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
