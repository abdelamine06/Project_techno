<?php


class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Connexion();
    }

    public function getPosts()
    {
        $this->db->prepared('SELECT * FROM posts');

        return $this->db->resultSet();
    }
}
