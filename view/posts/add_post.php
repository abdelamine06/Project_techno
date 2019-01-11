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
          <div class="container">                              <div class="row">
    <div class="col-md-6">
      <h1>Posts</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/posts/add_post" class="btn btn-primary pull-right">
        <i class="fa fa-pencil"></i> Add Post
      </a>
    </div>
  </div>
                                      
                                                <!--footer-->
                                                <footer style="background-color: black; weight:50px">
                                                  
                                                </footer>
                                            </html>
                                        