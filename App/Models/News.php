<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class News extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll($page = 1)
    {
        $item = 4;
        $offset = ($page - 1) * $item;

        $db = static::getDB();

        $sql = "SELECT * FROM news ORDER BY date DESC LIMIT $offset, $item";
        $sql = sprintf( $sql, $offset, $item );

        $stmt = $db->prepare($sql);
        $stmt->execute();

        $news['news'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $news['page'] = $page;

        return $news;

    }

    public function getLastNews()
    {
        $db = static::getDB();

        $sql = 'SELECT * FROM news ORDER BY date DESC LIMIT 1';

        $stmt = $db->prepare($sql);
        $stmt->execute();

        $news['lastNews'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $news['lastNews'];
    }

    public function getCount()
    {
        $db = static::getDB();

        $sql = 'SELECT COUNT(*) FROM news';

        $stmt = $db->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $total = $row[0];

        $news['lastPage'] = ceil((int)$total["COUNT(*)"] / 4);

        return $news['lastPage'];
    }

    public function getShow($news_id)
    {
        $db = static::getDB();

        $stmt = $db->prepare('SELECT * FROM news WHERE id = :news');
        $stmt->execute(array('news' => $news_id));

        $news['news'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $news['news'];
    }

    public function getId()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url2 = explode('/', $url);

        return end($url2);
    }


}
