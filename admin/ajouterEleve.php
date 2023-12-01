<?php
    require_once("connexion.php");
    /*
    $conn= mysqli_connect("localhost","root","") or die(mysqli_connect_error());
    mysqli_select_db ("gestion_scolaire",$conn) or die (mysqli_connect_error());
    */
    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $lieux=$_POST['lieux'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $sexe=$_POST['sexe'];
    $classe=$_POST['classe'];
    $nomphoto=$_FILES['photo'] ['name'];
    $file_tmp_name=$_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name,"new_photo/$nomphoto");
    $photoUrl = "new_photo/$nomphoto";
    // info Tuteur
    $nomTuteur=$_POST['nomTuteur'];
    $professionTuteur=$_POST['professionTuteur'];
    $telTuteur=$_POST['telTuteur'];
    $adresseTuteur=$_POST['adresseTuteur'];

    // Inserer un agent
    $sql = "INSERT INTO inscription_eleves (matricule, nom, prenom, age, lieu, tel, email, sexe, classe, photo, photoUrl, nomTuteur, professionTuteur, telTuteur, adresseTuteur ) 
                VALUES ('$matricule','$nom', '$prenom', '$age', '$lieux', '$tel', '$email', '$sexe', '$classe', '$nomphoto', '$photoUrl', '$nomTuteur', '$professionTuteur', '$telTuteur', '$adresseTuteur')";

    // INSERT TO Agent
    if (mysqli_query($conn, $sql)) {
        echo "";
    } else {
        echo "Erreur: " . $sql . "
    " . mysqli_error($conn);
    }

    
    /* rdquet sql pour insserer les donner dans la bass
    $req="insert into inscription_eleves (nom, prenom, age, tel, email, sexe, photo) 
    values ('$nom', '$prenom', $age, $tel, '$email', '$nomphoto')";
    mysqli_query($req, $conn) or (die(mysqli_connect_error()));
    */

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
            <div class="main">
                <h1>Carte Scolaire de : <?php echo ("$nom $prenom")?> </h1>
                <div class="insert_eleve">
                    <div class="eleve">
                        <div class="profil">
                            <div class="affichage_photo">
                                <img src="<?php echo ($photoUrl)?>">
                            </div>
                        </div>

                        <div class="infos">
                            <div class="affichage_nom">
                                <label for="ax_af_aj">Nom Prenom : </label><br>
                                <small for="ax_af_aj"><?php echo ("$nom $prenom")?></small>
                            </div>
                            <div class="affichage_classe">
                                <label for="anx_af_aj">Classe : </label>
                                <small for="ax_af_aj"><?php echo ($classe)?></small>
                            </div>
                            <div class="affichage_age">
                                <label for="anx_af_aj">Age : </label>
                                <small for="ax_af_aj"><?php echo ($age)?></small>
                            </div>
                            <div class="affichage_lieux">
                                <label for="anx_af_aj">Lieu : </label>
                                <small for="ax_af_aj"><?php echo ($lieux)?></small>
                            </div>
                            <div class="affichage_tel">
                                <label for="anx_af_aj">Tel : </label>
                                <small for="ax_af_aj"><?php echo ($tel)?></small>
                            </div>
                            <div class="affichage_sexe">
                                <label for="anx_af_aj">Sexe : </label>
                                <small for="ax_af_aj"><?php echo ($sexe)?></small>
                            </div>
                            <div class="affichage_email">
                                <label for="anx_af_aj">Email : </label><br>
                                <small for="ax_af_aj"><?php echo ($email)?></small>
                            </div>
                        </div>
                    </div>

                    <div class="tuteurs">
                        <h3>Personne à prévenir en cas de besoin</h3>

                        <div class="tuteur">
                            <!-- information consernant le tuteur de l'elève -->
                            <div>
                                <div class="affichage_nomTuteur">
                                    <label for="anx_af_aj">Nom et Prenom</label><br>
                                    <small for="ax_af_aj"><?php echo ($nomTuteur)?></small>
                                </div>
                                <div class="affichage_profession">
                                    <label for="anx_af_aj">Profession</label><br>
                                    <small for="ax_af_aj"><?php echo ($professionTuteur)?></small>
                                </div>                        
                            </div>

                            <div>
                                <div class="affichage_contacte">
                                    <label for="anx_af_aj">Contacte</label><br>
                                    <small for="ax_af_aj"><?php echo($telTuteur)?></small>
                                </div>
                                <div class="affichage_adresse">
                                    <label for="anx_af_aj">Adresse</label><br>
                                    <small for="ax_af_aj"><?php echo ($adresseTuteur)?></small>
                                </div> 
                            </div>
                        
                        </div>
                    </div>

                    <button type="submit">Imprimer</button>

                </div>            
            </div>
        </main>
		<!-- **********MAIN********** -->


	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>
<?php
mysqli_close($conn);
?>