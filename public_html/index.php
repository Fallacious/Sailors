<?php

session_start();

// Locatie waar de MVC bestanden opgeslagen zijn
//const APP_PATH = '/home/t04er1718/domains/t04-er-1718.clow.nl/e_register';
const APP_PATH = 'C:\xampp\e_register';

// Verbinding met database
require_once(APP_PATH . '/models/db-connection.php');

// Main layout
if (isset($_SESSION['user_data']['user_type'])) {
	switch ($_SESSION['user_data']['user_type']) {
		case 1:
			echo '<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>';
			require_once(APP_PATH . '/views/student/header_footer.html');
			break;

		case 2:
			echo '<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>';
			require_once(APP_PATH . '/views/docent/header_footer.html');
			break;

		case 3:
			echo '<link rel="stylesheet" type="text/css" href="css/style.css"/>';
			require_once(APP_PATH . '/views/admin/header_footer.html');
			break;
	}
} else {
	echo '<link rel="stylesheet" type="text/css" href="css/login.css"/>';
}

// Routes
require_once(APP_PATH . '/routes.php');

?>