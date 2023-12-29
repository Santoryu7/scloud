<?php

namespace Core;

class View
{
    public $template_view;

    function generate($content_view, $template_view, $data = null)
    {
        if(is_array($data)) {
            extract($data);
        }

        include $_SERVER['DOCUMENT_ROOT'] . '/App/Views/' . $template_view;
    }
}
