<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\News;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class DbController extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    function __construct()
    {
        $this->view = new View();
        $this->model = new News();
    }

    public function indexAction()
    {
        $this->view->generate('form.php', 'template.php');
    }


}
