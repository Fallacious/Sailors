<div class="left_background"></div>

<div class="left">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="left">
		<tr><th align="left">Printen</th></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=printen&display=tegoed">Tegoed</a></td>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=printen&display=opwaarderen">Opwaarderen</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=printen&display=printen">Printen</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=printen&display=account">Account</a></td></tr>
	</table>
</div>


<div class="college">
	<br>
	<br>

	<?php 

	if (isset($_GET['display'])){
		$dis = $_GET['display'];

		if ($dis == 'tegoed'){
			echo '<p><font color="red">Balans: &euro; 19,12</font></p>';
			echo '<p><b>Transactie overzicht</b></p>';

			echo '<table cellpadding="3" cellspacing="5" align="left" class="table">
  <tr>
    <th class="table">Datum</th>
    <th class="table">Bedrag</th>
    <th class="table">Bericht</th>
  </tr>
  <tr>
    <td class="table">19-12-2017 @ 11:56</td>
    <td class="table">&euro; 0,12</td>
    <td class="table">Copy-Print Canon</td>
  </tr>
  <tr>
    <td class="table">08-12-2017 @ 10:15</td>
    <td class="table">&euro; 0,04</td>
    <td class="table">Copy-Print Canon</td>
  </tr>
  <tr>
    <td class="table">04-12-2017 @ 15:07</td>
    <td class="table">&euro; 0,44</td>
    <td class="table">Copy-PrintCanon</td>
  </tr>
  <tr>
    <td class="table">23-11-2017 @ 09:26</td>
    <td class="table">&euro; 0,04</td>
    <td class="table">Copy-PrintCanon</td>
  </tr>
  <tr>
    <td class="table">12-10-2017 @ 10:29</td>
    <td class="table">&euro; 0,24</td>
    <td class="table">Copy-PrintCanon</td>
  </tr>
  <tr>
    <td class="table">12-10-2017 @ 09:08</td>
    <td class="table">&euro; 20,00</td>
    <td class="table">Tegoed opwaardering</td>
  </tr>
</table>';
		}
	}

	?>




	


</div>

