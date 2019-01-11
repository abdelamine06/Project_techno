<?php

    /**
     * permet la connexion a la base de donnée.
     * permet de préparer le requests aussi.
     */
    class Connexion
    {
        private $user = DB_USER;
        private $dbname = DB_NAME;
        private $password = DB_PASS;
        private $host = DB_HOST;
        private $db;
        private $sql_query;

        /**
         * connexion à la database.
         */
        public function __construct()
        {
            try {
                $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'', $this->user, $this->password);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        /**
         * Prepare la requete.
         */
        public function prepared($sql)
        {
            $this->sql_query = $this->db->prepare($sql);
        }

        /**
         * affecter les valeurs.
         */
        public function bind($param, $value)
        {
            $this->sql_query->bindValue($param, $value);
        }

        /**
         *  Execute la requete préparer.
         */
        public function execute()
        {
            return $this->sql_query->execute();
        }

        /**
         * avoir les resultats recuperer de tableaux d'objet.
         */
        public function resultSet()
        {
            $this->execute();

            return $this->sql_query->fetchAll(PDO::FETCH_OBJ);
        }

        /**
         * Recuperer une seule ligne de la table.
         */
        public function single()
        {
            $this->execute();

            return $this->sql_query->fetch(PDO::FETCH_OBJ);
        }

        /**
         * Recuperer le nombre de lignes
         */
        public function rowCount()
        {
            return $this->sql_query->rowCount();
        }
    }
