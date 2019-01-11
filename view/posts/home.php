<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                    <meta name="author" content="">
                        <title>Accueil</title>
                        <!-- Latest compiled and minified CSS -->
                        <link
                            crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet">
                            <!-- Optional theme -->
                            <link
                                crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" rel="stylesheet">
                                <!-- Latest compiled and minified JavaScript -->
                                <script crossorigin="anonymous" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <!-- Bootstrap core CSS -->
                                <link
                                    crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
                                    <!-- Custom styles for this template -->
                                    <link href="css/home.css" media="screen" rel="stylesheet" type="text/css"/>
                                </head>
                                <body>
                                    <div>
                                        <div class="section" id="b-section-header" name="Header">
                                            <div class="widget Header" data-version="2" id="Header1">
                                                <div class="header image-placement-behind no-image" id="header_home">
                                                    <div class="container">
                                                        <h1>
                                                            <a href="">BLOG DE NOS ENFANTS</a>
                                                        </h1>
                                                        <p>Surfer en sécurité</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Navigation -->
                                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                                            <div class="container">
                                                <a class="navbar-brand" href="#">LE BLOG DE VOTRE ENFANT</a>
                                                <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarResponsive">
                                                    <ul class="navbar-nav ml-auto">
                                                        <li class="nav-item active">
                                                            <a class="nav-link"  href="<?php echo URLROOT; ?>">Accueil
                                                                <span class="sr-only">(current)</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="<?php echo URLROOT; ?>/posts/add_post">Ajouter posts</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="<?php echo URLROOT; ?>/posts/display_post">Voir posts</a>
                                                        </li>
                                                        <li class="nav-item">
                                                         
               
                                                            <a class="nav-link" href="#">A propos</a>
                                                        </li>
                                                    </ul>
                                                    <div class="ml-auto my-2 my-lg-0">
                                                        <div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
                                                            <div class="widget BlogSearch" data-version="2" id="BlogSearch1">

                                                                <?php 
                                                                if ($_SESSION['user_id']) {
                                                                    ?>
                                                                      <form action="" class="form-inline">
                                                                    <div>
                                                                        <button class="btn btn-success">
                                                                            <a href="<?php echo URLROOT; ?>/users/logout">Se déconnecter</a>
                                                                        </button>
                                                                        <br></div>
                                                                         <button class="btn btn-default" style="margin-left:10px;" type="submit">
                                                                                <a href="<?php echo URLROOT; ?>/posts/index"><?php echo $_SESSION['user_email']; ?>
                                                                                </a>
                                                                        </button>
                                                                      
                                                                </form>
                                                                


                                                                <?php
                                                                } else {
                                                                    ?>
                                                                         <form action="" class="form-inline">
                                                                    <div>
                                                                        <button class="btn btn-success">
                                                                            <a href="<?php echo URLROOT; ?>/users/login">Se connecter</a>
                                                                        </button>
                                                                        <br></div>
                                                                        <div>
                                                                            <button class="btn btn-info" style="margin-left:10px;" type="submit">
                                                                                <a href="<?php echo URLROOT; ?>/users/register">S'inscrire</a>
                                                                            </button>
                                                                        </div>
                                                                </form>
                                                                

                                                                <?php
                                                                }

                                                                ?>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        <!-- Page Content -->
                                        <div class="container">
                                            <div
                                                class="row">
                                                <!-- Blog Entries Column -->
                                                <div class="col-md-8">
                                                    <h1 class="my-4">Proteger votre Enfant
                                                        <small>L'avenir de votre enfant est votre responsablité</small>
                                                    </h1>
                                                    <!-- Blog Post -->
                                                    <div class="card mb-4">
                                                        <img alt="Card image cap" class="card-img-top" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg">
                                                            <div class="card-body">
                                                                <h2 class="card-title">Votre tout premier article à poster</h2>
                                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                                                                <a href="https://bootsnipp.com/fullscreen/6Xa15" class="btn btn-primary">Read More →</a>
                                                            </div>
                                                            <div class="card-footer text-muted">
                                                                publier 11 janvier 2019
                                                                <a href="#">Start Bootstrap</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Sidebar Widgets Column -->
                                                    <div class="col-md-4">
                                                        <!-- Search Widget -->
                                                        <!-- Categories Widget -->
                                                            <div class="card my-3"> <h5 class="card-header">Categories</h5>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li>
                                                                                <a href="#">AMINE</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">MICHAEIL</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">SEBASTIEN</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li>
                                                                                <a href="#">PANAMA</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">ODO</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">OUSMAN</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Side Widget -->
                                                        <div class="card my-4">
                                                            <h5 class="card-header">BIENVENUE A TOUT LE MONDE</h5>
                                                            <div class="card-body">
                                                               Là vous pouvez mettre tout ce qui vous plait!
                                                            </div>
                                                        </div>
                                                        <!-- Side Widget -->
                                                        <div class="card my-4">
                                                            <h5 class="card-header">banner</h5>
                                                            <div class="card-body">
                                                                <img alt="Card image cap" class="card-img-top" src="https://2.bp.blogspot.com/-vvG5hMTFOro/W6RaoxdAikI/AAAAAAAAK1k/jezYdP7fvfYvt15Jv8a0agrGQE2lMU8YgCKgBGAs/s1600/MASAI-2.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!--footer-->
                                                <footer style="background-color: black; weight:50px">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>© Projet techno logique
                                                                <a href="#">MEHDAOUI Abdelamine
                                                                    <i class="fa fa-love"></i>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </html>
                                        