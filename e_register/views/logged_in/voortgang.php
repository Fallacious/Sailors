<div class="left_background"></div>

<div class="left">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="left">
		<tr><th>Voortgang</th></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=3">Totaal</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=1">Toetsen</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=2">Opdrachten</a></td></tr>
	</table>
</div>

<div class="main">
	<br>
	<br>
	<?php
	echo '<progress value="' . rand(1, 100) . '" max="100"></progress>';
	?>
</div>