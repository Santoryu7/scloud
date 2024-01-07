<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\News;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class NewsController extends \Core\Controller
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
        $page = $this->model->getId();
        $news = $this->model->getAll((int) $page);

        $lastNews = $this->model->getLastNews();
        $lastPage = $this->model->getCount();

        $news['page'] = $page;

        $news['bias'] = $page > 1 ? 1 : 0;
        $news['biasForButton'] = 1;

        $news['lastPage'] = $page == $lastPage ? True : False;
        $news['last_news'] = $lastNews;

        $data['news'] = $news;
        $this->view->generate('index.php', 'template.php', $data);
    }
}
