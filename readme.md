Author : MEHDAOUI Abdelamine
PROJET TECHNOLOGIQUE
PROF: LIONEL CLIMENT


Description du mini projet:

On général dans ce mini-projet j'ai essayer de faire une plateforme de base pour pouvoir continuer dessus lors de la réalisation de notre projet final, du coup j'ai définie 
toute la structure d'un framework MVC qui va nous permettre de se focaliser sur les fonctionnalités du projets et de ne soucié pas sur le code, et d'évité tout code non organisé

En plus de ça j'ai fait un systeme d'inscription et d'autentification complets avec toutes les validations possible qui ma apparus, pour pouvoir sécurisé notre site et d'évité
toue faille posssible, en plus d'un fichier .htaccess pour restreindre les acces aux dossiers du site.

Sturcture du projet(dossiers):
config: ya un fichier de configuration de la base de donnée du coup ça nous permettre seulement de changé ce fichier pour pouvoir accedé a tout
controller: ici y'a tous les controller qui seront en connexion avec les modeles et les views
core: c'est le dossier de base ou y'a le coeur du framework et la configuration initial de celui ci en fait j'ai procedé comme suit:

/tous acces au site va etre via le index.php contenu dans le dossier webroot

/ après y'aura un fichier dispacher.php qui va etre instancier dans index.php celui ici va etre à la reception de la requete (requet.php) de l'utilisateur en forme de url qui va pas comprendre
et qui va appeler un fichier router.php qui va pouvoir decoupe ceuli ci pour pouvoir donné un sens a l'url envoyer, et ça va etre de la forme /controller/action/parmettres

/en plus de ça en va chargé le premier controller ou le controller pere

helpers: pour seulement afficher les flash message et l'essai de l'envoi d'un mail au momment de l'inscirption avec PHPMailer reste un peut de travail sur ça 
webroot: cest le dossier public en quelques sort ya le front end en general du css,html et du javascript