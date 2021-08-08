<?php
require "config.php";
session_start();
session_destroy();
redirect('scouter_login');

?>