<div class="main">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="center">
		<form method="post">
			<!-- E_mail -->
			<tr><th align="right">E-mail</th>
			<td><input type="text" 
					   name="e_mail" 
					   pattern="[a-z][a-z0-9]*(?:_[a-z0-9])*.{2,50}" 
					   title="Alleen letters, getallen en underscores. U moet beginnen met een letter." 
					   required></td>

			<!-- E_mail_type -->
			<td><select name="e_mail_type" required>
			  	<option>@ginger.com</option>
  				<option>@beaker.com</option>
  				<option>@weasley.com</option>	
			</select></td></tr>

			<!-- Submit -->
			<tr><td colspan="3" align="right"><input type="submit" name="delete_contact" value="Verwijderen"></td></tr>
		</form>
	</table>
</div>