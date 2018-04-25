<div class="main">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="left">
		<?php
		
		for ($i = 0; $i < count($_SESSION['contacts']); $i++){
			echo '<tr><td><a href="index.php?controller=logged_in&action=new_message&to=' . $_SESSION['contacts'][$i][0] . '">' . $_SESSION['contacts'][$i][0] . '</a></td></tr>';
		}

		?>
	</table>
</div>