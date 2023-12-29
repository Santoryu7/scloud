<?php

namespace App\Controllers;

use App\Models\News;
use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class ShowController extends \Core\Controller
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
        $this->view->generate('show.php', 'template.php', $data);
    }
}
