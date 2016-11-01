<?php

// var_dump($_POST);
// $clientID = $_POST['client_id'];
$clientID = 'jamesratcliffetest';
$scope = $_POST['scope'];
$authURL = "https://cloud.merchantos.com/oauth/authorize.php?response_type=code&client_id={$clientID}&scope={$scope}";

// echo $authurl;
header("location: {$authURL}");
