<?php

require 'view.php';

function do_register(string $page)
{
    render_view($page);
}

function do_login(string $page)
{
    render_view($page);
}

function do_not_found(string $page)
{
    render_view($page);
}