<?php

use app\models\User;

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

$user = new User;
$userEncontrado = $user->find('id', $id);

$layout->add('user_edit');