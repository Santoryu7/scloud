<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\News;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class AddController extends \Core\Controller
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
        $title = $_POST['title'] ?? null;
        $announce = $_POST['announce'] ?? null;
        $content = $_POST['content'] ?? null;

        $db = News::getDB();

        $sql = 'INSERT INTO news (title, announce, content) VALUES (:title, :announce, :content)';

        $params = [
            'title' => $title,
            'announce' => $announce,
            'content' => $content
        ];

        $stmt = $db->prepare($sql);
        try {
            $stmt->execute($params);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        header('Location: /public/news/1');
    }
}
