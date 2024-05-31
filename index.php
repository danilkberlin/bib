<?php

include_once('app/inc/routes.php');
include_once('app/inc/controller.php');
include_once('app/inc/render.php');
include_once('app/inc/model.php');

$route = $_GET['main_route'] ?? "";
new Routes($route);