<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\News;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class DeleteController extends \Core\Controller
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

        $db = News::getDB();

        $sql = 'DELETE FROM news WHERE id = :newsId';

        $stmt = $db->prepare($sql);

        try {
            $stmt->execute(array('newsId' => $newsId));
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        header('Location: /public/news/1');
    }
}
