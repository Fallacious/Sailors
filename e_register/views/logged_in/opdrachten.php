<div class="left_background"></div>

<div class="left">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="left">
		<tr><th>Opdrachten</th></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=opdrachten&display=1">College 1</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=opdrachten&display=2">College 2</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=opdrachten&display=3">College 3</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=opdrachten&display=4">College 4</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=opdrachten&display=5">College 5</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=opdrachten&display=6">College 6</a></td></tr>
	</table>
</div>

<div class="college">
	<br>
	<br>	
	<?php 
		if (isset($_GET['display'])){
			require_once(APP_PATH . '/views/logged_in/opdracht' . $_GET['display'] . '.php');
		}
	?>
	<br>
	<br>	
</div>