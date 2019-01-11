<?php


class PostsController extends Controller
{
    /**
     *  la méthode par defaut des la page des posts.
     */
    public function index()
    {
        $posts = $this->postModel->getPosts();

        $data = ['title' => 'Welcome', 'Posts' => $posts];

        $this->render('home', $data);
    }

    /**
     *  la methode par defaut de la page pour ajouté des posts.
     */
    public function add_post()
    {
        $this->render('add_post');
    }

    /*
     * la methode par default de la page pour affiché tous les posts
     */
    public function display_post()
    {
        $this->render('display_post');
    }
}
