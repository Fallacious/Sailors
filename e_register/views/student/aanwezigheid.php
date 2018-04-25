<div class="left">
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid&display=all">Alle vakken</a></p>

	<?php 

		$data = vakken($_SESSION['user_data']['nummer']);

		foreach ($data as $row) {
			echo '<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid&display=' . $row['vak'] . '">' . $row['vak'] . '</a></p>';
		}
	?>
</div>

<style>
	/* TABLE */
	#table {
	    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	    border-collapse: collapse;
	    width: 80%;
	}

	#table td, #table th {
	    padding: 8px;
	}

	#table tr:nth-child(even){background-color: #f2f2f2;}

	#table tr:hover {background-color: #ddd;}

	#table th {
	    padding-top: 12px;
	    padding-bottom: 12px;
	    text-align: left;
	    background-color: #000080;
	    color: white;
	}
</style>

<div class="main">
	<table align="center" id="table">
		<tr>
			<th width="10%">Periode</th>
			<th width="30%">Datum tijd</th>
			<th width="50%">College</th>
			<th width="10%">Absentie</th>
		</tr>

		<?php 

		if (!isset($_GET['display'])) {
			$data = student($_SESSION['user_data']['nummer'], 'all'); 
		} else {
			$data = student($_SESSION['user_data']['nummer'], $_GET['display']); 
		}

		foreach ($data as $row) {
			echo '<tr><td>' . $row['periode'] . '</td>';
			echo     '<td>' . $row['datum_tijd'] . '</td>';
			echo     '<td>' . $row['vak'] . ' ' . $row['college_nr'] . ' ' . $row['college_naam'] . '</td>';
			echo     '<td>' . $row['omschrijving'] . '</td></tr>';
		}

		?>
	</table>
</div>