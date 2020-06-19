<?php

if(!isset($_GET['modulo'])){ echo '<pre>' . file_get_contents('texto.txt') . '</pre>' ; die(); }

require 'controller.php';
require 'view.php';
require 'model/aluno.php';

$c = new Controller();

?>
