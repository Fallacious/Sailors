<div class="student">
  <h3><?php echo 'Welkom ' . $_SESSION['user_data']['naam'] . '!'; ?></h3>
</div>

<div class="menu" style="">
  <?php 

  echo '<p>HBO-ICT</p>';
  echo '<p>' . $_SESSION['user_data']['nummer'] . '</p><p>';

  if ($_SESSION['user_data']['tussenvoegsel'] == ''){
    echo $_SESSION['user_data']['naam'] . ' ' . $_SESSION['user_data']['achternaam']; 
  } else {
    echo $_SESSION['user_data']['naam'] . ' ' . $_SESSION['user_data']['tussenvoegsel'] . ' ' . $_SESSION['user_data']['achternaam']; 
  }

  echo '</p>';

  ?>
</div>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],

  <?php echo '["Aanwezig",' . 		count_absentie($_SESSION['user_data']['nummer'], 'Aanwezig')[0] . '],'; ?>
  <?php echo '["Afwezig",' . 		count_absentie($_SESSION['user_data']['nummer'], 'Afwezig')[0] . '],'; ?>
  <?php echo '["Te laat",' . 		count_absentie($_SESSION['user_data']['nummer'], 'Te laat')[0] . '],'; ?>
  <?php echo '["Ziek",' . 			count_absentie($_SESSION['user_data']['nummer'], 'Ziek')[0] . '],'; ?>
  <?php echo '["Omstandigheden",' . count_absentie($_SESSION['user_data']['nummer'], 'Omstandigheden')[0] . '],'; ?>
  <?php echo '["Eerder weg",' . 	count_absentie($_SESSION['user_data']['nummer'], 'Eerder weg')[0] . ']]);'; ?>

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Aanwezigheid 2017-2018', 'width':800, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<div class="main" id="piechart"></div>