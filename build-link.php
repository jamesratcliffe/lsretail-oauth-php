<?php

$config = require 'config.php';
$client_id = $config['clientID'];
$scope = $_POST['scope'];
$authURL = "https://cloud.lightspeedapp.com/oauth/authorize.php?response_type=code&client_id={$client_id}&scope={$scope}";

if ($_POST['button'] == 'generate'):

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lightspeed Retail OAuth Connector</title>
</head>
<body>
	<h1>Authorization Endpoint URL Generated</h1>
	<p><a href="<?= $authURL; ?>"><?= $authURL; ?></a></p>
</body>
</html>

<?php

elseif ($_POST['button'] == 'link'):
	header("location: {$authURL}");
endif;

?>
