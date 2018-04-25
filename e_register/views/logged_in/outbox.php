<div class="left">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="left">
		<?php 
		for ($i = 0; $i < count($_SESSION['outbox']); $i++){
			echo 	// Sender
					'<tr><td>'   								.
					$_SESSION['outbox'][$i][1]  				.
					'</td></tr>' 								.

					// Date
					'<tr><td>'   								.
					substr($_SESSION['outbox'][$i][3], 0 , -3)  .
					'</td></tr>' 								.

					// Topic
					'<tr><td>'   								.
					$_SESSION['outbox'][$i][4]  				.
					'</td></tr>' 								.

					// Display message
					'<tr><td>' 									.
					'<a href="index.php?controller=logged_in&action=outbox&option=view&id=' . $i . '">' . 'View</a>' .

					// Gray line
					'<tr><td>'   								.
					'<hr>'		 								.
					'</td></tr>';
		}
 
		?>
	</table>
</div>

<div class="main">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="left">
		<?php
		if (count($_SESSION['outbox']) > 0 && isset($_GET['option']) && isset($_GET['id'])){
			echo 	'<tr><th align="left">Sender</th><td>'  . $_SESSION['outbox'][$_GET['id']][1] . '</td></tr>' .
					'<tr align="left"><th>Date</th><td>'    . $_SESSION['outbox'][$_GET['id']][3] . '</td></tr>' .
					'<tr align="left"><th>Topic</th><td>'   . $_SESSION['outbox'][$_GET['id']][4] . '</td></tr>' .
					'<tr align="left"><th>Message</th><td>' . $_SESSION['outbox'][$_GET['id']][5] . '</td></tr>';
		}
		?>
	</table>
</div>