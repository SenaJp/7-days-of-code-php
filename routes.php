<?php

require CONTROLLER;

$page = ($_GET['page'] ?? 'login').'.view';

switch ($page) {
    case 'login.view':
        echo do_login($page);
        break;
    case 'register.view':
        echo do_register($page);
        break;
    default:
        echo do_not_found('not_found.view');
        break;
}