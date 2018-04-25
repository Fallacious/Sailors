<div class="left">
	<p><a href="index.php?controller=student&action=aanwezigheid&display=all">Projectmanagement</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas A</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas B</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas C</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas D</a></p>

	<p><a href="index.php?controller=student&action=aanwezigheid&display=all">Webdevelopment</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas A</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas B</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas C</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas D</a></p>

	<p><a href="index.php?controller=student&action=aanwezigheid&display=all">Databases</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas A</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas B</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas C</a></p>
	<p><div class="triangle_small"></div><a href="index.php?controller=student&action=aanwezigheid">Klas D</a></p>
	<br>
	<p><a href="index.php?controller=student&action=aanwezigheid">Exporteren als CSV</a></p>
</div>

<style>
	/* TABLE */
	#table {
	    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	    border-collapse: collapse;
	   
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
			<th>Periode</th>
			<th>Datum tijd</th>
			<th>College</th>
			<th>Nummer</th>
			<th>Naam</th>
			<th>Foto</th>
			<th>Absentie</th>
		</tr>

		<?php 

		$data = get_students();

		foreach ($data as $row) {
			echo '<tr><td>1</td>';
			echo     '<td>25-03-2018 10:00</td>';
			echo     '<td>Project management 1 Inleiding</td>';
			echo     '<td>' . $row['nummer'] . '</td>';

			if ($row['tussenvoegsel'] == '') {
				echo '<td>' . $row['naam'] . ' ' . $row['achternaam'] . '</td>';
			} else {
				echo '<td>' . $row['naam'] . ' ' . $row['tussenvoegsel'] . ' ' . $row['achternaam'] . '</td>';
			}

			$images = glob('media/lego/*{jpg,jpeg,png,gif}', GLOB_BRACE);

			echo     '<td><img src="' . $images[array_rand($images)] . '" width="60"</td>';

			$status = array('Aanwezig', 'Aanwezig', 'Aanwezig', 'Aanwezig', 'Aanwezig', 'Aanwezig', 'Aanwezig', 'Aanwezig', 'Afwezig', 'Ziek', 'Anders');

			echo     '<td>' . $status[array_rand($status)] . '</td></tr>';
		}

		?>
	</table>
</div>