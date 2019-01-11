<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="../css/oui.css" />

<script src="../js/main.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Entrer le mail avec le quel vous etes inscris</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
            <?php flash('register_success'); ?>
                <p class="form-title">
                    S'identifier</p>
                <form class="login" action="<?php echo URLROOT; ?>/users/login" method="post">
                    
               <input type="text" name="email" placeholder="Email" /><p style="color:red"><?php echo $data['error_mail']; ?></p>
                <input type="password" name="password" placeholder="Password" /><p style="color:red"><?php echo $data['error_password']; ?></p>
                <input type="submit" value="Connecté" class="btn btn-success btn-sm" />
                 <a href="<?php echo URLROOT; ?>/users/register"><input type="text"  value="S'inscrire" class="btn btn-info btn-sm" /></a>
               
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Souvenir de moi
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascription:void(0)" class="forgot-pass">password oublié</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
   
</div>
