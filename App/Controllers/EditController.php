<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\News;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class EditController extends \Core\Controller
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

        $title = $_POST['title'] ?? null;
        $announce = $_POST['announce'] ?? null;
        $content = $_POST['content'] ?? null;

        $db = News::getDB();

        $sql = 'UPDATE news SET title = :title, announce = :announce, content = :content WHERE id = :newsId';

        $stmt = $db->prepare($sql);
        try {
            $stmt->execute(array(':title' => $title, ':announce' => $announce, ':content' => $content, ':newsId' => $newsId));
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        header('Location: /public/news/1');
    }


}
