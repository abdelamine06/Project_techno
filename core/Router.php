<?php

/**
 * Permet de parser ou de décomposer l'url a trois argument /Controller/Action/Params.
 */
class Router
{
    /**
     * decoupé l'url récuperer en Controller/action/params.
     */
    public static function parse($url, $request)
    {
        $url = trim($url, '/');
        //decomposé la chaine en un array par un /
        $args = explode('/', $url);
        $request->controller = $args[0];
        $request->action = isset($args[1]) ? $args[1] : 'index';
        $request->params = array_slice($args, 2);

        return true;
    }
}
