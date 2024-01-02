<?php
require 'fonction/generic_functions.php';
require 'fonction/robot_functions.php';

$robotName = isset($_POST['robot_name']) && !empty($_POST['robot_name']) ? $_POST['robot_name'] : generateRandomName();
$familiarity = isset($_POST['familiarity']) ? $_POST['familiarity'] : 'random';
    

$robotDetails = generateRobotDetails($robotName, $familiarity);
$robotDetails['familiarity'] = $familiarity;

require 'views/homepage.phtml';
?>