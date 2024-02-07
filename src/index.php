<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Boxicons -->
	<link rel="stylesheet" href="assets/icons/boxicons-2.1.4/css/boxicons.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/tableau_users.css">
	<title>AdminHub</title>
</head>
<body>

	<!-- CONTENT -->
	<section id="content">

		<!-- MAIN -->
		<!-- TABLEAU -->
		<main>

			<div class="head-title">
				<div class="left">
					<h1>Utilisateurs</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Utilisateurs</a>
						</li>
					</ul>
				</div>
				<a href="add.php" class="btn-download">
					<i class='bx bx-add-to-queue'></i>
					<span class="text">Ajouter un membre</span>
				</a>
			</div>

			<main class="table">
				<section class="table__header">
					<h1>Liste des Utilisateurs</h1>
				</section>
				<section class="table__body">
					<table>
						<thead>
							<tr>
								<th> Identifiant <span class="icon-arrow">&UpArrow;</span></th>
								<th> Nom / prénoms <span class="icon-arrow">&UpArrow;</span></th>
								<th> age <span class="icon-arrow">&UpArrow;</span></th>
								<th> Email <span class="icon-arrow">&UpArrow;</span></th>
								<th> Profesion <span class="icon-arrow">&UpArrow;</span></th>
								<th> Action <span class="icon-arrow">&UpArrow;</span></th>
							</tr>
						</thead>
						<tbody>
						<?php
							// Fetch the next row of a result set as an associative array
							while ($res = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>" . htmlspecialchars($res['id']) . "</td>";
								echo "<td>" . htmlspecialchars($res['name']) . "</td>";
								echo "<td>" . htmlspecialchars($res['age']) . " Ans</td>";
								echo "<td>" . htmlspecialchars($res['email']) . "</td>";
								echo "<td>" . "mpianatra". "</td>";
								echo "<td>";
								echo "<strong>";
								echo "<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class='bx bx-trash button'></i></a>";
								echo "<a href='#popup1' class=''>";
								echo "<i class='bx bx-info-circle button'></i>";
								echo "</a>";
								echo "<a href=\"edit.php?id={$res['id']}\" class=''>";
								echo "<i class='bx bx-pencil button'></i>";
								echo "</a>";
								echo "</td>";
								echo "</strong>";
								echo "</tr>";
							}
						?>
						</tbody>
					</table>
				</section>
			</main>
			<!-- MAIN -->
			</section>

		<!-- fin code HTML pop Up -->
	</main>
	<script src="assets/js/tableau_users.js"></script>
</body>
</html>