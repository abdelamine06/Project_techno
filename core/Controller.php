
<?php
    /**
     * le controller de base
     * permet de chargé les models
     * permet de chargé les views.
     */
    class Controller
    {
        // j'aurai pas besoin de vars en d'hors de controller

        public $request;
        public $postModel;

        /**
         * constructeur.
         *
         * @param $request Object request de notre application
         */
        public function __construct($request)
        {
            $this->request = $request;
            // charge le model pour les posts
            $this->postModel = $this->loadModel('Post');
            //charge le model pour les users
            $this->userModel = $this->loadModel('User');
        }

        /**
         * Permet de rendre ou de charger une vue.
         *
         * @param $view page ou fichier à rendre (chemin depuis view pour page d'erreur ou nom de la vue)
         * @param $data est un tableaux d'arguments passé a la vue
         */
        public function render($view, $data = [])
        {
            $file = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
            require $file;
        }

        /*
         * Permet de charger le model
         * @param  $name nom du model
         */
        public function loadModel($name)
        {
            $file = ROOT.DS.'model'.DS.$name.'.php';
            require_once $file;
            // es ce que ma variable $name est déja chargé

            return new $name();
        }
    }

?>
