<div class="main">
	<br>
	<br>
	<table cellpadding="5" cellspacing="10" align="center">
		<!-- Change personal data -->
		<tr><th colspan="2" align="center"><h3>Persoonlijke gegevens</h3><hr></th></tr>
		<form method="post">
			<tr><th align="right">E-mail
			</th><td> <?php echo $_SESSION['e_mail']; ?> </td></tr>
		
			<tr><th align="right">Voornaam
			</th><td><input type="text" name="firstname" value="<?php echo $_SESSION['user_data'][1]; ?>" required></td></tr>

			<tr><th align="right">Tussenvoegsel
			</th><td><input type="text" name="insertion" value="<?php echo $_SESSION['user_data'][2]; ?>"></td></tr>

			<tr><th align="right">Achternaam
			</th><td><input type="text" name="lastname" value="<?php echo $_SESSION['user_data'][3]; ?>"required></td></tr>
			
			<tr><th align="right">Huidige wachtwoord
			</th><td><input type="password" name="current_password" required></td></tr>
			
			<tr><td colspan="2" align="right"><input type="submit" name="submit_personal_data" value="Aanpassen"></td></tr>
		</form>
		
		<!-- Change password -->
		<tr><th colspan="2" align="center"><h3>Wachtwoord</h3><hr></th></tr>
		<form method="post">
			<tr><th align="right">Nieuwe wachtwoord
			</th><td><input type="password" name="new_password" required></td></tr>

			<tr><th align="right">Herhaal nieuwe wachtwoord
			</th><td><input type="password" name="repeat_new_password" required></td></tr>
			
			<tr><th align="right">Huidige wachtwoord
			</th><td><input type="password" name="current_password" required></td></tr>
			
			<tr><td colspan="2" align="right"><input type="submit" name="submit_new_password" value="Aanpassen"></td></tr>
		</form>
	</table>
</div>