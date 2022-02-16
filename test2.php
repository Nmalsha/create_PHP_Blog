<?php
require_once "inclueds/autoloader.mvc.php";
use models\Dbh;


$dbh = new Dbh();

$body =  "My body";

include "inclueds/template_signup.php";