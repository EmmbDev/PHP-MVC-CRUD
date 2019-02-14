<?php 
$app['database']->update('users', ['name' => $_POST['newName']], 
	"name = '{$_POST['oldName']}'");
header('Location: /');