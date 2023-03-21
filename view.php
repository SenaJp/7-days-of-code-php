<?php

function render_view(string $template)
{
    $content = file_get_contents(VIEW_FOLDER.$template);
    echo $content;
}