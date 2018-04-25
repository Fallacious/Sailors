<div class="main">
	<br>
	<br>
	<table cellpadding="5" cellspacing="10" align="center">
		<form method="post">
			<!-- Receiver -->
			<tr><th align="right">To</th>
			<td><input type="text" name="to" value="<?php if (isset($_GET['to'])){ echo $_GET['to']; } ?>" required></td></tr>
			
			<!-- Topic -->
			<tr><th align="right">Topic</th>
			<td><input type="text" name="topic" required></td></tr>

			<!-- Message -->
			<tr><th align="right" valign="top">Message</th>
				<td><textarea rows="4" cols="50" maxlength="255" name="message" required>Enter text here...</textarea></td></tr>
			
			<tr><td colspan="2" align="right"><input type="submit" name="submit_message" value="Send"></td></tr>
		</form>
	</table>
</div>