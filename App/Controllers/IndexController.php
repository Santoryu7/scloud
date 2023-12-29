<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\News;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class IndexController extends \Core\Controller
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
        $newsId = $this->model->getId();
        $news = $this->model->getShow($newsId);

        $data['news'] = $news;

        $this->view->generate('edit.php', 'template.php', $data);
    }


}
