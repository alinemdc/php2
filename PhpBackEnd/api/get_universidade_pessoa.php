<?php
include __DIR__.'/../control/Universidade_PessoaControl.php';
$universidade_pessoaControl = new Universidade_PessoaControl();

header('Content-Type: application/json');

echo json_encode($universidade_pessoaControl->find());


?>