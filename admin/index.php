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
			<li class="active">
				<a href="#">
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

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
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

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>10720</h3>
						<p>Nombre d'élèves</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>5384</h3>
						<p>Total Gaçons</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>5843</h3>
						<p>Total Files</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Inscriptions Recents</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Numeros</th>
								<th>Payements</th>
							</tr>
						</thead>
						
                        <?php
                            require_once ("connexion.php");
                            
                            $sql = "SELECT * FROM inscription_eleves LIMIT 0, 5";
                            $rs = mysqli_query($conn, $sql) or die(mysqli_connect_error());
                        
                            while($ET=mysqli_fetch_assoc($rs)){
                        ?>
						<tbody>
							<tr>
								<td>
									<img src="new_photo/<?php  echo ($ET['photo'])?>">
									<p>
                                        <?php  echo ($ET['nom'])?>
                                        <?php  echo ($ET['prenom'])?>
                                    </p>
								</td>
								<td><?php  echo ($ET['tel'])?></td>
								<td><span class="status completed">Completed</span></td>
							</tr>
                        <?php }?>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Absences Recents</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>

                    <?php
                        require_once ("connexion.php");
                        
                        $sql = "SELECT * FROM absenceeleve LIMIT 0, 5";
                        $rs = mysqli_query($conn, $sql) or die(mysqli_connect_error());
                    
                        while($ET=mysqli_fetch_assoc($rs)){
                    ?>

					<ul class="todo-list">
						<li class="not-completed">
							<p>
                                <?php  echo ($ET['nom'])?>
                                <?php  echo ($ET['prenom'])?>
                            </p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
                        <?php }?>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>