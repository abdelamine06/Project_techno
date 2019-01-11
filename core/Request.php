<?php

/**
 * permet d'Avoir l'url tapé par l'utilisateur.
 */
class Request
{
    public $url;

    public function __construct()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $this->url = $_SERVER['PATH_INFO'];
        } else { // la pages par default est /pages/index
            $this->url = '/posts/index';
        }
    }
}
